<?

	include("../../conf/loadconfig.inc.php");

	# ----------------------------------------------------------------------------------------------------
	# SESSION
	# ----------------------------------------------------------------------------------------------------
	sess_validateSMSession();
	permission_hasSMPerm();
	check_action_permission('estados', 'view');
	
	$url_base = "".DEFAULT_URL."/gerenciamento";
		
	# ----------------------------------------------------------------------------------------------------
	# AUX
	# ----------------------------------------------------------------------------------------------------
	extract($_GET);
	extract($_POST);
    
    /*
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        var_dump($_POST);
        exit;    
    } 
    */

	define(LOCATION_AREA,"COUNTRY");
	define(LOCATION_TITLE, ucwords(system_showText(LANG_SITEMGR_LABEL_COUNTRY)));
	include_once(EDIRECTORY_ROOT."/includes/code/location.php");

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

		<? include(INCLUDES_DIR."/tables/table_location_submenu.php");?>

		<div style="text-align:left;">
		<? include_once(EDIRECTORY_ROOT."/includes/forms/form_location.php");?>
		</div>
		<br />
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