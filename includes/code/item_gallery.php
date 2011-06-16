<?

	# ----------------------------------------------------------------------------------------------------
	# * FILE: /includes/code/item_gallery.php
	# ----------------------------------------------------------------------------------------------------
	$errorPage = "$url_redirect/".(($search_page) ? "search.php" : "index.php")."?message=".urlencode($message)."&screen=$screen&letra=$letra".(($url_search_params) ? "&$url_search_params" : "")."";

	if ($item_type == "listing") {
		if (LISTING_MAX_GALLERY <= 0) {
			header("Location: ".$errorPage);
			exit;
		}
		$level = new ListingLevel();
	} elseif ($item_type == "event") {
		if (EVENT_MAX_GALLERY <= 0) {
			header("Location: ".$errorPage);
			exit;
		}
		$level = new EventLevel();
	} elseif ($item_type == "classified") {
		if (CLASSIFIED_MAX_GALLERY <= 0) {
			header("Location: ".$errorPage);
			exit;
		}
		$level = new ClassifiedLevel();
	} elseif ($item_type == "article") {
		if (ARTICLE_MAX_GALLERY <= 0) {
			header("Location: ".$errorPage);
			exit;
		}
		$level = new ArticleLevel();
	} else {
		header("Location: ".$url_base."/");
		exit;
	}

	if ($item_id) {

		if ($item_type == "listing") {
			$item = new Listing($item_id);
		} elseif ($item_type == "event") {
			$item = new Event($item_id);
		} elseif ($item_type == "classified") {
			$item = new Classified($item_id);
		} elseif ($item_type == "article") {
			$item = new Article($item_id);
		}

		if ((!$item->getNumber("id")) || ($item->getNumber("id") <= 0)) {
			header("Location: ".$errorPage);
			exit;
		}

		if ((sess_getAccountIdFromSession() != $item->getNumber("account_id")) && (!strpos($url_base, "/gerenciamento"))) {
			header("Location: ".$errorPage);
			exit;
		}

		$imagesNumber = $level->getImages($item->getNumber("level"));
		if ((!$imagesNumber) || ($imagesNumber == 0)) {
			header("Location: ".$errorPage);
			exit;
		}

	} else {
		header("Location: ".$errorPage);
		exit;
	}

	# ----------------------------------------------------------------------------------------------------
	# SUBMIT
	# ----------------------------------------------------------------------------------------------------

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (validate_form("item_gallery", $_POST, $message_itemgallery)) {
			$item->setGalleries($gallery_ids);
			$message = system_showText(LANG_MSG_GALLERY_SUCCESSFULLY_CHANGED);
			header("Location: $url_redirect/".(($search_page) ? "search.php" : "index.php")."?message=".urlencode($message)."&screen=$screen&letra=$letra".(($url_search_params) ? "&$url_search_params" : "")."");
			exit;
		}
	}

	# ----------------------------------------------------------------------------------------------------
	# FORMS DEFINES
	# ----------------------------------------------------------------------------------------------------
	$item->extract();
	$galleries = db_getFromDBBySQL("gallery", "SELECT Gallery.* FROM Gallery inner join Gallery_Item on Gallery_Item.gallery_id = Gallery.id  WHERE item_id = ".$item_id." ORDER BY title", "array");
  
	$itemGalleries = $item->getGalleries();


	if (count($galleries) == 0) {

			$dbObj = db_getDBObject();
			$sql = "INSERT INTO Gallery"
					. " (title,"
					. " account_id,"
					. " entered,"
					. " updated)"
					. " VALUES"
					. " ('novo gallery', "
					. $item->getNumber('account_id'). ", "
					. " NOW(), "
					. " NOW())";

			//echo "2";
			//echo "Insert C: ".$sql."<br>";
			$dbObj->query($sql); 
			$insert_id = mysql_insert_id();
			
			$sql = "DELETE FROM Gallery_Item WHERE item_type='listing' AND item_id = ".$item_id;
			//echo "Delete CI: ".$sql."<br>";
			$dbObj->query($sql);
			//echo "3";
			$sql = "INSERT INTO Gallery_Item (item_id, gallery_id, item_type) VALUES (".$item_id.", ".$insert_id.", '".$item_type."')";
			//echo "Insert CI: ".$sql."<br>";
			//echo "4";
			$rs3 = $dbObj->query($sql);
			$galleries = db_getFromDBBySQL("gallery", "SELECT Gallery.* FROM Gallery inner join Gallery_Item on Gallery_Item.gallery_id = Gallery.id WHERE item_id = ".$item_id." ORDER BY title", "array");
			//echo "5";
		   //echo "SELECT Gallery.* FROM Gallery inner join Gallery_Item on Gallery_Item.gallery_id = Gallery.id WHERE item_id = ".$item_id." ORDER BY title";
		
			$itemGallery = $item->getGalleries();
			
}

	$galleryCheckBoxLeft = "";
	$galleryCheckBoxRight = "";
	$total = ceil(count($galleries)/2);
	$i = 0;
	
	if ($galleries) foreach ($galleries as $gallery) {

		$usedGalleries = db_getFromDBBySQL("Gallery_Item", "SELECT * FROM Gallery_Item WHERE gallery_id = ".$gallery["id"], "array");

		$sel = "";

		if (($itemGalleries && in_array($gallery["id"], $itemGalleries)) || ($gallery_ids && in_array($gallery["id"], $gallery_ids)) && ($gallery["id"] != "")) $sel = " checked ";
		if (count($usedGalleries) > 0 && $sel == "") $sel .= " disabled ";
		

		$viewGallery = "<a title=\"".system_showText(LANG_MSG_CLICK_TO_VIEW_GALLERY)."\" class=\"tooltip\" href=\"#\"><img style=\"cursor: pointer;\" onclick=\"window.open('".$url_base."/gallery/preview.php?id=".$gallery["id"]."', '_blank','toolbar=0,location=0,directories=0,status=0,width=750,height=450,screenX=0,screenY=0,menubar=0,scrollbars=yes,resizable=0');\" src=\"".DEFAULT_URL."/images/bt_view.gif\" border=\"0\" alt=\"".system_showText(LANG_MSG_CLICK_TO_VIEW_GALLERY)."\" title=\"".system_showText(LANG_MSG_CLICK_TO_VIEW_GALLERY)."\" /></a>";
		if ($item_type == "listing") {
			header("Location: ".$url_base."/fotos/".$gallery["id"]."/".$empresa_id);
		}
		elseif ($item_type == "article"){
			header("Location: ".$url_base."/blog/fotos/".$gallery["id"]."/".$item_id."/".$listing_id);
		}
	//	header("Location: ".$url_base."/fotos/".$gallery["id"]."/".$empresa_id);
		
		$manageGallery = "<a class=\"tooltip\" title=\"".system_showText(LANG_MSG_CLICKTOMANAGEGALLERYIMAGES)."\" href=\"".$url_base."/gallery/images.php?id=".$gallery["id"]."\"><img src=\"".DEFAULT_URL."/images/icon_gallery.gif\" border=\"0\" alt=\"".system_showText(LANG_MSG_CLICKTOMANAGEGALLERYIMAGES)."\"  /></a>";

		unset($itemGalleryObj);
		$itemGalleryObj = new Gallery($gallery["id"]);

		if ($i<$total) {
			$galleryCheckBoxLeft .= "<input id=\"gallery_".$gallery["id"]."\" class=\"inputCheck\" type=\"checkbox\" name=\"gallery_ids[]\" $sel value=\"".$gallery["id"]."\" />&nbsp<label for=\"gallery_".$gallery["id"]."\">".$gallery["title"]."</label> <em>(".count($itemGalleryObj->image)." ".((count($itemGalleryObj->image)==1) ? (system_showText("fotos")) : (system_showText(LANG_MSG_GALLERY_PHOTOS))).")</em> $viewGallery $manageGallery<br />";
		} else {
			$galleryCheckBoxRight .= "<input id=\"gallery_".$gallery["id"]."\" class=\"inputCheck\" type=\"checkbox\" name=\"gallery_ids[]\" $sel value=\"".$gallery["id"]."\" />&nbsp<label for=\"gallery_".$gallery["id"]."\">".$gallery["title"]."</label> <em>(".count($itemGalleryObj->image)." ".((count($itemGalleryObj->image)==1) ? (system_showText("fotos")) : (system_showText(LANG_MSG_GALLERY_PHOTOS))).")</em> $viewGallery $manageGallery<br />";
		}

		unset($itemGalleryObj);

		$i++;

	}

?>