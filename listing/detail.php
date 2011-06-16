<?
	session_start();
	include("../conf/loadconfig.inc.php");
	include(LISTING_EDIRECTORY_ROOT."/mod_rewrite.php");
	include(EDIRECTORY_ROOT."/includes/code/validate_querystring.php");
	include(EDIRECTORY_ROOT."/includes/code/validate_frontrequest.php");

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
       	if ($_POST["id"]) $listing = new Listing($_POST["id"]);
      	$to = system_denyInjections($to);
		$subject = system_denyInjections($subject);
      
	   	$body = system_denyInjections($body);

		$error = "";
    	if (!validate_email($to)) $error .= system_showText(LANG_MSG_CONTACT_ENTER_VALID_EMAIL)."<br />";
		if (!validate_email($from)) $error .= system_showText(LANG_MSG_CONTACT_ENTER_VALID_EMAIL)."<br />";
		if (!$body) $error .= system_showText(LANG_MSG_CONTACT_TYPE_MESSAGE)."<br />";

		if (md5($_POST["captchatext"]) != $_SESSION["captchakey"]) {
			$error .= system_showText(LANG_MSG_CONTACT_TYPE_CODE)."<br />";
		}
        //echo "3".$error;
		if (empty($error)) {
			if (empty($subject)) $subject = LANG_LISTING_CONTACTSUBJECT_ISNULL_1." ".$listing->getString("title")." ".LANG_LISTING_CONTACTSUBJECT_ISNULL_2." ".EDIRECTORY_TITLE;
            $subject = stripslashes($subject);
			$body 	 = stripslashes($body);
           	$subject = "[".system_showText(LANG_CONTACTPRESUBJECT)." ".EDIRECTORY_TITLE."] ".$subject;

			$return = system_mail($to, $subject, $body, $from, 'text/plain', '', '', $error);
			if ($return) {
				$error = system_showText(LANG_CONTACTMSGSUCCESS);
			}	else {
				$error = system_showText(LANG_CONTACTMSGFAILED).($error ? '<br />'.$error : '')."<br />";
			}

			if ($return) {
				report_newRecord("listing", $_POST["id"], LISTING_REPORT_EMAIL_SENT);
				unset($from, $subject, $body);
			}

		} else {
			$error .= system_showText(LANG_MSG_CONTACT_CORRECTIT_TRYAGAIN);
		}

	}

	# ----------------------------------------------------------------------------------------------------
	# LISTING
	# ----------------------------------------------------------------------------------------------------
	if (($_GET["id"]) || ($_POST["id"])) {
		$id = $_GET["id"] ? $_GET["id"] : $_POST["id"];
		$listing = new Listing($id);
		$level = new ListingLevel(EDIR_DEFAULT_LANGUAGE, true);
		unset($listingMsg);
		if ((!$listing->getNumber("id")) || ($listing->getNumber("id") <= 0)) {
			$listingMsg = "Estabelecimento n�o escontrado.";
		} elseif ($listing->getString("status") != "A") {
		
		} elseif ($level->getDetail($listing->getNumber("level")) != "y") {
			$listingMsg = "Estabelecimento n�o dispon�vel.";
		} else {
			report_newRecord("listing", $id, LISTING_REPORT_DETAIL_VIEW);
		}
	} else {
		header("Location: ".LISTING_DEFAULT_URL."/");
		exit;
	}
	
	

	# ----------------------------------------------------------------------------------------------------
	# REVIEWS
	# ----------------------------------------------------------------------------------------------------
	if ($id)  $sql_where[] = " item_type = 'listing' AND item_id = ".db_formatNumber($id)." ";
	if (true) $sql_where[] = " review IS NOT NULL AND review != '' ";
	if (true) $sql_where[] = " approved = '1' ";
	if ($sql_where) $sqlwhere .= " ".implode(" AND ", $sql_where)." ";
	$pageObj  = new pageBrowsing("Review", $screen, 3, "added DESC", "", "", $sqlwhere);
	$reviewsArr = $pageObj->retrievePage("object");

	# ----------------------------------------------------------------------------------------------------
	# HEADER
	# ----------------------------------------------------------------------------------------------------
	if (($listing->getNumber("id")) && ($listing->getNumber("id") > 0)) {
		$listCategs = $listing->getCategories();
		if ($listCategs) {
			foreach ($listCategs as $listCateg) {
				$category_id[] = $listCateg->getNumber("id");
			}
		}
	}
	$_POST["category_id"] = $category_id;
	$extrastyle = array(DEFAULT_URL."/layout/detail.css", DEFAULT_URL."/layout/template.css");
	$banner_section = "listing";
	$headertag_title = (($listing->getString("seo_title"))?($listing->getString("seo_title")):($listing->getString("title")));
	$headertag_description = (($listing->getStringLang(EDIR_LANGUAGE, "seo_description"))?($listing->getStringLang(EDIR_LANGUAGE, "seo_description")):($listing->getStringLang(EDIR_LANGUAGE, "description")));
	$headertag_keywords = (($listing->getStringLang(EDIR_LANGUAGE, "seo_keywords"))?($listing->getStringLang(EDIR_LANGUAGE, "seo_keywords")):(str_replace(" || ", ", ", $listing->getStringLang(EDIR_LANGUAGE, "keywords"))));
	include(EDIRECTORY_ROOT."/layout/header_details.php");

	# ----------------------------------------------------------------------------------------------------
	# AUX
	# ----------------------------------------------------------------------------------------------------
	require(EDIRECTORY_ROOT."/frontend/checkregbin.php");

	# ----------------------------------------------------------------------------------------------------
	# BODY
	# ----------------------------------------------------------------------------------------------------
	if (EDIR_THEME) {
		include(THEMEFILE_DIR."/".EDIR_THEME."/body/listing_detail.php");
	} else {
		include(EDIRECTORY_ROOT."/frontend/body/listing_detail.php");
	}

	# ----------------------------------------------------------------------------------------------------
	# FOOTER
	# ----------------------------------------------------------------------------------------------------
	$banner_section = "listing";
	include(EDIRECTORY_ROOT."/layout/footer.php");

?>
