<?

	# ----------------------------------------------------------------------------------------------------
	# * FILE: /gerenciamento/estabelecimentos/gallery.php
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
	check_action_permission('estabelecimentos', 'edit');

	$url_redirect = "".DEFAULT_URL."/gerenciamento/estabelecimentos";
	$url_base = "".DEFAULT_URL."/gerenciamento";
	$sitemgr = 1;

	# ----------------------------------------------------------------------------------------------------
	# AUX
	# ----------------------------------------------------------------------------------------------------
	extract($_POST);
	extract($_GET);

	$empresa_id = $_GET['item_id'];
	 if ($empresa_id) {
		$listing = new Listing($empresa_id);
	}


	$url_search_params = system_getURLSearchParams((($_POST)?($_POST):($_GET)));

	# ----------------------------------------------------------------------------------------------------
	# CODE
	# ----------------------------------------------------------------------------------------------------
	include(EDIRECTORY_ROOT."/includes/code/item_gallery.php");

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

			<table border="0" cellpadding="0" cellspacing="0" class="standard-table">
				<tr>
					<th class="standard-tabletitle"><?=system_showText(LANG_SITEMGR_ADDGALLERY)?>:</th>
				</tr>
				<tr>
					<td style="background: none;">
						<button type="button" name="new_gallery" class="ui-state-default ui-corner-all" onclick="javascript:document.location='<?=DEFAULT_URL?>/gerenciamento/gallery/gallery.php?item_type=listing&item_id=<?=$item->getNumber("id")?><?=(($url_search_params) ? "&$url_search_params" : "");?>';" ><?=system_showText(LANG_SITEMGR_ADDGALLERY)?></button>
					</td>
				</tr>
			</table>

			<? $listingLevelGallery = new ListingLevel(); ?>
			<div class="response-msg notice ui-corner-all"><?=system_showText(LANG_SITEMGR_LISTING_MSGGALLERY1)?> <?=(($listingLevelGallery->getImages($item->getNumber("level")) == -1) ? (system_showText(LANG_SITEMGR_ULIMITED)) : ($listingLevelGallery->getImages($item->getNumber("level"))));?> <?=system_showText(LANG_SITEMGR_LISTING_MSGGALLERY2)?></div>

			<table border="0" cellpadding="0" cellspacing="0" class="standard-table" style="margin-bottom: 0;">
				<tr>
					<th class="standard-tabletitle"><?=system_showText(LANG_SITEMGR_ASSOCIATEGALLERY)?> <?=system_showText(LANG_SITEMGR_LISTING_SING)?>:</th>
				</tr>
			</table>
			
			<div class="baseForm">

			<form name="gallery" action="<?=$_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="item_id" value="<?=$item_id?>" />
				<input type="hidden" name="item_type" value="listing" />
				<input type="hidden" name="letra" value="<?=$letra?>" />
				<input type="hidden" name="screen" value="<?=$screen?>" />
				<?=system_getFormInputSearchParams((($_POST)?($_POST):($_GET)));?>

				<? include(INCLUDES_DIR."/forms/form_itemgallery.php"); ?>

				<button type="submit" value="<?=system_showText(LANG_SITEMGR_SUBMIT)?>" class="ui-state-default ui-corner-all"><?=system_showText(LANG_SITEMGR_SUBMIT)?></button>
				<button type="button" value="<?=system_showText(LANG_SITEMGR_CANCEL)?>" class="ui-state-default ui-corner-all" onclick="document.getElementById('formlistinggallerycancel').submit();"><?=system_showText(LANG_SITEMGR_CANCEL)?></button>

			</form>
			<form id="formlistinggallerycancel" action="<?=DEFAULT_URL?>/gerenciamento/listing/<?=(($search_page) ? "search.php" : "index.php");?>" method="post">

				<input type="hidden" name="letra" value="<?=$letra?>" />
				<input type="hidden" name="screen" value="<?=$screen?>" />
				<?=system_getFormInputSearchParams((($_POST)?($_POST):($_GET)));?>

			</form>
			
			
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
