<?
	# ----------------------------------------------------------------------------------------------------
	# * FILE: /gerenciamento/smaccount/index.php
	# ----------------------------------------------------------------------------------------------------

	# ----------------------------------------------------------------------------------------------------
	# LOAD CONFIG
	# ----------------------------------------------------------------------------------------------------
	include("../../conf/loadconfig.inc.php");

	# ----------------------------------------------------------------------------------------------------
	# SESSION
	# ----------------------------------------------------------------------------------------------------
	sess_validateSMSession();
	permission_hasSMPerm();
	check_action_permission('admin_local', 'view');

	$url_redirect = "".DEFAULT_URL."/gerenciamento/smaccount";
	$url_base     = "".DEFAULT_URL."/gerenciamento";

	# ----------------------------------------------------------------------------------------------------
	# CODE
	# ----------------------------------------------------------------------------------------------------	
	extract($_POST);
	extract($_GET);

	$url_search_params = system_getURLSearchParams((($_POST)?($_POST):($_GET)));

	// Page Browsing ////////////////////////////////////////
	$pageObj = new pageBrowsing("SMAccount", $screen, 1000, (($_GET["newest"])?("id DESC"):("username")), "username", $letra, "admin_type='admin_local'");
	$smaccount = $pageObj->retrievePage();

	$paging_url = DEFAULT_URL."/gerenciamento/smaccount/index.php";

	# PAGES DROP DOWN ----------------------------------------------------------------------------------------------
	$pagesDropDown = $pageObj->getPagesDropDown($_GET, $paging_url, $screen, system_showText(LANG_SITEMGR_PAGING_GOTOPAGE)." ", "this.form.submit();");
	# --------------------------------------------------------------------------------------------------------------

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
							<? include(INCLUDES_DIR."/tables/table_smaccount_local_submenu.php"); ?>
							<? include(INCLUDES_DIR."/tables/table_paging.php"); ?>

							<? if ($smaccount) { ?>
								<? include(INCLUDES_DIR."/tables/table_smaccount_local.php"); ?>
								<? } else { ?>
									<div class="response-msg inf ui-corner-all">
										<?=system_showText(LANG_SITEMGR_SMACCOUNT_NORECORD)?>
									</div>
								<? } ?>
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