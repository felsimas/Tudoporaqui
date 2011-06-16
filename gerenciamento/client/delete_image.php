<?

	include("../../conf/loadconfig.inc.php");

	# ----------------------------------------------------------------------------------------------------
	# SESSION
	# ----------------------------------------------------------------------------------------------------
	sess_validateSMSession();
	permission_hasSMPerm();
	check_action_permission('estabelecimentos', 'delete');

	$url_redirect = "".DEFAULT_URL."/gerenciamento/client";
	$url_base = "".DEFAULT_URL."/gerenciamento";
	$sitemgr = 1;

	# ----------------------------------------------------------------------------------------------------
	# AUX
	# ----------------------------------------------------------------------------------------------------
	extract($_POST);
	extract($_GET);

	$url_search_params = system_getURLSearchParams((($_POST)?($_POST):($_GET)));

	# ----------------------------------------------------------------------------------------------------
	# CODE
	# ----------------------------------------------------------------------------------------------------
	$errorPage = DEFAULT_URL."/gerenciamento/client/index.php?message=".urlencode($message)."&screen=$screen&letra=$letra";
	if (!$client_image_id || !$id) {
		header("Location: ".$errorPage);
		exit;
	}
	$client = new Client($id);
	if ((!$client->getNumber("id")) || ($client->getNumber("id") <= 0)) {
		header("Location: ".$errorPage);
		exit;
	}

	# ----------------------------------------------------------------------------------------------------
	# SUBMIT
	# ----------------------------------------------------------------------------------------------------
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$client = new Client($id);
		$client->DeleteImage($client_image_id);
	}


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

			<div id="header-form"><?=system_showText(LANG_SITEMGR_DELETE)?> <?=ucwords(system_showText(LANG_SITEMGR_IMAGE))?></div>

			<div class="response-msg success ui-corner-all"><?=system_showText(LANG_SITEMGR_GALLERY_SUCCESSDELETED)?></div>

			<table name="client_image_delete_warn" style="margin: 0 auto 0 auto;">
				<tr>

					<form name="back" action="<?=DEFAULT_URL?>/gerenciamento/client/images.php" method="post">

						<td>
							<input type="hidden" name="id" id="id" value="<?=$id?>" />
							<input type="hidden" name="screen" id="screen" value="<?=$screen?>" />
							<input type="hidden" name="letra" id="letra" value="<?=$letra?>" />
							<button type="submit" title="back" value="Back" class="ui-state-default ui-corner-all"><?=system_showText(LANG_SITEMGR_BACK)?></button>
						</td>

					</form>

				</tr>
			</table>

							</div>
						</div>
					</div>
				</div>
			</div>
		<div class="clearfix"></div>

<?
	# ----------------------------------------------------------------------------------------------------
	# FOOTER
	# ----------------------------------------------------------------------------------------------------
	include(SM_EDIRECTORY_ROOT."/layout/footer.php");
?>
