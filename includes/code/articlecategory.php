<?php

	# ----------------------------------------------------------------------------------------------------
	# * FILE: /includes/code/articlecategory.php
	# ----------------------------------------------------------------------------------------------------

	####################################################################################################
	### PAY ATTENTION - SAME CODE
	### INCLUDES/CODE/LISTINGCATEGORY.PHP
	### INCLUDES/CODE/EVENTCATEGORY.PHP
	### INCLUDES/CODE/CLASSIFIEDCATEGORY.PHP
	### INCLUDES/CODE/ARTICLECATEGORY.PHP
	####################################################################################################

	# ----------------------------------------------------------------------------------------------------
	# AUX
	# ----------------------------------------------------------------------------------------------------
	if ($_POST["title"]) {
		$_POST["title"] = trim($_POST["title"]);
	}
	extract($_GET);
	extract($_POST);

	# ----------------------------------------------------------------------------------------------------
	# SUBMIT
	# ----------------------------------------------------------------------------------------------------
	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		if ($_POST["languages"]) $_POST["lang"] = implode(",", $_POST["languages"]);

		if (validate_form("articlecategory", $_POST, $message_category)) {

			$category = new ArticleCategory($id);
			$category->makeFromRow($_POST);
			if (strlen($keywords)=="") $category->setString("keywords", "");
			if (strlen($keywords1)=="") $category->setString("keywords1", "");
			if (strlen($keywords2)=="") $category->setString("keywords2", "");
			if (strlen($keywords3)=="") $category->setString("keywords3", "");
			if (strlen($keywords4)=="") $category->setString("keywords4", "");

			$category->Save();

			if ($_POST["category_id"]) {
				if ($_POST["id"]) {
					$message = system_showText(LANG_SITEMGR_CATEGORY_SUBCATEGORY_SUCCESSUPDATED);
				} else {
					$message = system_showText(LANG_SITEMGR_CATEGORY_SUBCATEGORY_SUCCESSADDED);
				}
			} else {
				if ($_POST["id"]) {
					$message = system_showText(LANG_SITEMGR_CATEGORY_SUCCESSUPDATED);
				} else {
					$message = system_showText(LANG_SITEMGR_CATEGORY_SUCCESSADDED);
				}
			}

			header("Location: $url_redirect/"."?message=".urlencode($message)."&listing_id=".$listing_id."");
			exit;

		}

		// removing slashes added if required
		$_POST = format_magicQuotes($_POST);
		$_GET = format_magicQuotes($_GET);
		extract($_POST);
		extract($_GET);

	}

	# ----------------------------------------------------------------------------------------------------
	# FORMS DEFINES
	# ----------------------------------------------------------------------------------------------------
	if ($id) {
		$category = db_getFromDB("articlecategory", "id", $id);
		$category->extract();
		$languages = explode(",", $category->lang);
	}

	extract($_POST);
	extract($_GET);

	$fatherCategoryObj = new ArticleCategory($category_id);

?>
