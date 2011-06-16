<?
	# ----------------------------------------------------------------------------------------------------
	# * FILE: /gerenciamento/estabelecimentos/index.php
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
	check_action_permission('estabelecimentos', 'view');

	$url_redirect = "".DEFAULT_URL."/gerenciamento/estabelecimentos";
	$url_base = "".DEFAULT_URL."/gerenciamento";
	$sitemgr = 1;

	$url_search_params = system_getURLSearchParams((($_POST)?($_POST):($_GET)));

	extract($_GET);
	extract($_POST);
	
	$sql_where = array();
	$locais = array();
	$locais = $_SESSION[SESS_SM_LOCALIDADE];
	
	foreach ($locais as $local){
		$sql_where[] = " cidade_id = '$local'";
	}
	if ($sql_where) $sqlwhere .= " ".implode(" OR ", $sql_where)." ";
	
	// Page Browsing /////////////////////////////////////////
	$pageObj  = new pageBrowsing("Listing", $screen, 100, (($_GET["newest"])?("id DESC"):((LISTING_SCALABILITY_OPTIMIZATION == "on")?(""):("level DESC, title"))), "title", $letra, $sqlwhere);
	$listings = $pageObj->retrievePage();

	$paging_url = DEFAULT_URL."/gerenciamento/estabelecimentos";

	// Letters Menu
	$letras = $pageObj->getString("letras");
	foreach ($letras as $each_letra) {
		if ($each_letra == "#") {
			$letras_menu .= "<a href=\"$paging_url\" ".((!$letra) ? "class=\"firstLetter\"" : "" ).">".strtoupper($each_letra)."</a>";
		} else {
			$letras_menu .= "<a href=\"$paging_url/letra/".$each_letra."\" ".(($each_letra == $letra) ? "style=\"color:#EF413D\"" : "" ).">".strtoupper($each_letra)."</a>";
		}
	}

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
		<? include(INCLUDES_DIR."/tables/table_listing_submenu.php"); ?>
		<? include(INCLUDES_DIR."/tables/table_paging.php"); ?>

		<? if ($listings) { ?>
			<div id="content">
			<? include(INCLUDES_DIR."/tables/table_listing.php"); ?>
			</div>
		<? } else { ?>
			<div class="response-msg inf ui-corner-all">
				<?=system_showText(LANG_SITEMGR_LISTING_NORECORDS)?>
			</div>
		<? } ?>
		<? include(INCLUDES_DIR."/tables/table_paging_bottom.php"); ?>
		
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="clearfix"></div>
<?
	include(SM_EDIRECTORY_ROOT."/layout/footer.php");
?>