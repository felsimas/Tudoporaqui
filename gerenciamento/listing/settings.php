<?
    include("../../conf/loadconfig.inc.php");

	# ----------------------------------------------------------------------------------------------------
	# SESSION
	# ----------------------------------------------------------------------------------------------------
	sess_validateSMSession();
	permission_hasSMPerm();
	check_action_permission('estabelecimentos', 'confirm');

	$url_redirect = "".DEFAULT_URL."/gerenciamento/estabelecimentos";
	$url_base = "".DEFAULT_URL."/gerenciamento";
	$sitemgr = 1;

	# ----------------------------------------------------------------------------------------------------
	# AUX
	# ----------------------------------------------------------------------------------------------------
	extract($_POST);
	extract($_GET);

	$url_search_params = system_getURLSearchParams((($_POST)?($_POST):($_GET)));

	if ($id) {
		$listingObj = new Listing($id);
	} else {
		header("Location: ".DEFAULT_URL."/gerenciamento/listing/".(($search_page) ? "search.php" : "index.php")."?message=".urlencode($message)."&screen=$screen&letra=$letra".(($url_search_params) ? "&$url_search_params" : "")."");
		exit;
	}

	# ----------------------------------------------------------------------------------------------------
	# SUBMIT
	# ----------------------------------------------------------------------------------------------------
	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		if ($_POST["amount"]) $_POST["amount"] = format_money($_POST["amount"]);
		else $_POST["amount"] = false;

		if ($hasrenewaldate == "no") {
			unset($_POST['renewal_date']);
		}

		if (validate_form("listingsettings", $_POST, $message_listingsettings)) {

			$listingObj->setString("status", $_POST['status']);
			$listingObj->setDate("renewal_date", $_POST['renewal_date']);

			if (!$listingObj->hasRenewalDate()) {
				$listingObj->setString("renewal_date", "0000-00-00");
			}

			$listingObj->Save();

			if ($_POST["add_transaction"] == 1) {

				$accountObj = new Account($_POST["account_id"]);
				$contactObj = new Contact($_POST["account_id"]);

				// retrieving categories related with listing
				$db = db_getDBObject();
				$sql = "SELECT cat_1_id, cat_2_id, cat_3_id, cat_4_id, cat_5_id FROM Listing WHERE id = {$id}";
				$r = $db->query($sql);
				$row = mysql_fetch_assoc($r);
				$category_amount = 0;
				if ($row["cat_1_id"]) $category_amount++;
				if ($row["cat_2_id"]) $category_amount++;
				if ($row["cat_3_id"]) $category_amount++;
				if ($row["cat_4_id"]) $category_amount++;
				if ($row["cat_5_id"]) $category_amount++;

				$log["account_id"]				= $_POST["account_id"];
				$log["username"]				= $accountObj->getString("username");;
				$log["ip"]						= $_SERVER["REMOTE_ADDR"];
				$log["transaction_id"]			= "MAN_".strtoupper(uniqid(""));
				$log["transaction_status"]		= MANUAL_STATUS;
				$log["transaction_datetime"]	= date("Y-m-d H:i:s");
				$log["transaction_amount"]		= str_replace(",", "", $_POST["amount"]);
				$log["transaction_currency"]	= MANUAL_CURRENCY;
				$log["system_type"]				= "manual";
				$log["notes"]					= $_POST["notes"];

				$paymentLogObj = new PaymentLog($log);
				$paymentLogObj->Save();

				$payment_listing_log["payment_log_id"]	= $paymentLogObj->getString("id");
				$payment_listing_log["listing_id"]		= $listingObj->getString("id");
				$payment_listing_log["listing_title"]	= $listingObj->getString("title", false);
				$payment_listing_log["discount_id"]		= $listingObj->getString("discount_id");
				$payment_listing_log["level"]			= $listingObj->getString("level");
				$payment_listing_log["renewal_date"]	= $listingObj->getString("renewal_date");
				$payment_listing_log["categories"]		= $category_amount;
				$payment_listing_log["amount"]			= str_replace(",", "", $_POST["amount"]);

				$payment_listing_log["extra_categories"] = 0;
				$levelObj = new ListingLevel();
				if (($category_amount > 0) && (($category_amount - $levelObj->getFreeCategory($listingObj->getString("level"))) > 0)) {
					$payment_listing_log["extra_categories"] = $category_amount - $levelObj->getFreeCategory($listingObj->getString("level"));
				} else {
					$payment_listing_log["extra_categories"] = 0;
				}

				$payment_listing_log["listingtemplate_title"] = "";
				if (LISTINGTEMPLATE_FEATURE == "on") {
					if ($listingObj->getString("listingtemplate_id")) {
						$listingTemplateObj = new ListingTemplate($listingObj->getString("listingtemplate_id"));
						$payment_listing_log["listingtemplate_title"] = $listingTemplateObj->getString("title", false);
					}
				}

				$paymentListingLogObj = new PaymentListingLog($payment_listing_log);
				$paymentListingLogObj->Save();

			}

			# ------------------------------------------------------------------------------
			# SENDING Email OF ACTIVATION LISTING TO MEMBER
			# ------------------------------------------------------------------------------
            //echo '1';
			if ($_POST['email_notification'] == 1 && $_POST['status'] == "A") {
			   //echo '2';
				if ($listingObj->getNumber("account_id") > 0) {
				  	$contactObj = new Contact($listingObj->getNumber("account_id"));
                     $listingType = "";
                        if($listingObj->getString('tipo_assinante') == 1) {$listingType = SYSTEM_ACTIVE_LISTING_UTILIDADE_PUBLICA;}
                        if($listingObj->getString('tipo_assinante') == 2) {$listingType = SYSTEM_ACTIVE_LISTING_GRATUITO;}
                        if($listingObj->getString('tipo_assinante') == 30) {$listingType = SYSTEM_ACTIVE_LISTING_ASSINANTE;}
                        if($listingObj->getString('tipo_assinante') == 90) {$listingType = SYSTEM_ACTIVE_LISTING_ASSINANTE;}
                        if($listingObj->getString('tipo_assinante') == 180) {$listingType = SYSTEM_ACTIVE_LISTING_ASSINANTE;}
                        if($listingObj->getString('tipo_assinante') == 360) {$listingType = SYSTEM_ACTIVE_LISTING_ASSINANTE;}
					if($emailNotificationObj = system_checkEmail($listingType, $contactObj->getString("lang"))) {
                        //echo '4';
						setting_get("sitemgr_send_email", $sitemgr_send_email);
						setting_get("sitemgr_email", $sitemgr_email);
						$sitemgr_emails = split(",", $sitemgr_email);
						if ($sitemgr_emails[0]) $sitemgr_email = $sitemgr_emails[0];
						$subject = $emailNotificationObj->getString("subject");
						$body 	 = $emailNotificationObj->getString("body");
						$body 	 = system_replaceEmailVariables($body, $listingObj->getNumber('id'), 'listing');
						$subject = system_replaceEmailVariables($subject, $listingObj->getNumber('id'), 'listing');
						$body = html_entity_decode($body);
						$subject = html_entity_decode($subject);

						system_mail($contactObj->getString("email"), $subject, $body, EDIRECTORY_TITLE." <$sitemgr_email>", $emailNotificationObj->getString("content_type"), "", $emailNotificationObj->getString("bcc"), $error);
                       	header("Location: ".DEFAULT_URL."/gerenciamento/listing/".(($search_page) ? "search.php" : "index.php")."?message=".urlencode($message)."&screen=$screen&letra=$letra".(($url_search_params) ? "&$url_search_params" : "")."");
			exit;
                }
				}
			}
            //echo DEFAULT_URL."/gerenciamento/listing/".(($search_page) ? "search.php" : "index.php")."?message=".urlencode($message)."&screen=$screen&letra=$letra".(($url_search_params) ? "&$url_search_params" : "")."";
			header("Location: ".DEFAULT_URL."/gerenciamento/listing/".(($search_page) ? "search.php" : "index.php")."?message=".urlencode($message)."&screen=$screen&letra=$letra".(($url_search_params) ? "&$url_search_params" : "")."");
			exit;

		}

	}

	# ----------------------------------------------------------------------------------------------------
	# FORMS DEFINES
	# ----------------------------------------------------------------------------------------------------
	$renewal_date = $listingObj->getDate("renewal_date");

	// Status Drop Down
	$statusObj = new ItemStatus();
	unset($arrayValue);
	unset($arrayName);
	$arrayValue = $statusObj->getValues();
	$arrayName = $statusObj->getNames();
	unset($arrayValueDD);
	unset($arrayNameDD);
	for ($i=0; $i<count($arrayValue); $i++) {
		if ($arrayValue[$i] != "E") {
			$arrayValueDD[] = $arrayValue[$i];
			$arrayNameDD[] = $arrayName[$i];
		}
	}
	$statusDropDown = html_selectBox("status", $arrayNameDD, $arrayValueDD, $listingObj->getString("status"), "", "class='input-dd-form-settings'", "-- ".system_showText(LANG_LABEL_SELECT_ALLSTATUS)." --");

	if(!$_POST["account_id"]) $account_id = $listingObj->getString("account_id");

	# ----------------------------------------------------------------------------------------------------
	# HEADER
	# ----------------------------------------------------------------------------------------------------
	include(SM_EDIRECTORY_ROOT."/layout/header_manager.php");

?>

	<div id="page-wrapper">

		<div id="main-wrapper">
		
		<?php 	include(SM_EDIRECTORY_ROOT."/menu.php"); ?>
		
			<div id="main-content"> 

				<div class="page-title ui-widget-content ui-corner-all">

					<div class="other_content">
	

			<? require(EDIRECTORY_ROOT."/gerenciamento/registration.php"); ?>
			<? require(EDIRECTORY_ROOT."/includes/code/checkregistration.php"); ?>
			<? require(EDIRECTORY_ROOT."/frontend/checkregbin.php"); ?>

			<? include(INCLUDES_DIR."/tables/table_listing_submenu.php"); ?>

			<br />
			
			<div class="baseForm">

			<form name="listing_setting" action="<?=$_SERVER["PHP_SELF"]?>" method="post">
				<input type="hidden" name="id" value="<?=$id?>" />

				<?include(INCLUDES_DIR."/forms/form_listingsettings.php"); ?>

							<?=system_getFormInputSearchParams((($_POST)?($_POST):($_GET)));?>
							<input type="hidden" name="letra" value="<?=$letra?>" />
							<input type="hidden" name="screen" value="<?=$screen?>" />
							<button type="submit" value="Submit" class="ui-state-default ui-corner-all"><?=system_showText(LANG_SITEMGR_SUBMIT)?></button>
							<button type="button" name="back" value="Back" class="ui-state-default ui-corner-all" onclick="document.getElementById('formlistingsettingscancel').submit();"><?=system_showText(LANG_SITEMGR_BACK)?></button>

			</form>
			<form id="formlistingsettingscancel" action="<?=DEFAULT_URL?>/gerenciamento/listing/<?=(($search_page) ? "search.php" : "index.php");?>" method="post">
							<?=system_getFormInputSearchParams((($_POST)?($_POST):($_GET)));?>
							<input type="hidden" name="letra" value="<?=$letra?>" />
							<input type="hidden" name="screen" value="<?=$screen?>" />
			</form>
			
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="clearfix"></div>

<? if ($listingObj->hasRenewalDate()) { ?>
	<script language="javascript">
		<!--
		<? if (DEFAULT_DATE_FORMAT == "m/d/Y") { ?>
			var cal_renewal_date = new calendarmdy(document.forms['listing_setting'].elements['renewal_date']);
		<? } elseif (DEFAULT_DATE_FORMAT == "d/m/Y") { ?>
			var cal_renewal_date = new calendardmy(document.forms['listing_setting'].elements['renewal_date']);
		<? } ?>
		cal_renewal_date.year_scroll = true;
		cal_renewal_date.time_comp = false;
		//-->
	</script>
<? } ?>

<?
	# ----------------------------------------------------------------------------------------------------
	# FOOTER
	# ----------------------------------------------------------------------------------------------------
	include(SM_EDIRECTORY_ROOT."/layout/footer.php");
?>
