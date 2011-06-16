<?php

	$icon_navbar = "";

	$icon_listing_level = $listing->getNumber("level");
	$cityObj = new LocationRegion($listing->getNumber("bairro_id"));
	$stateObj = new LocationState($listing->getNumber("cidade_id"));
	$listing_city = $cityObj->getString("name");
	$listing_state = $stateObj->getString("name");
	$listing_address = $listing->getString("address");
	$listing_zipcode = $listing->getString("zip_code");
	$location_map = urlencode("$listing_address, $listing_city, $listing_state");

	if ($user) {

		$friend_link = "onclick='javascript:window.open(\"".LISTING_DEFAULT_URL."/emailform.php?id=".$listing->getNumber("id")."&amp;receiver=friend\",\"popup\",\"toolbar=0,location=0,directories=0,status=0,width=700,height=450,screenX=0,screenY=0,menubar=0,scrollbars,resizable=0\")'";
		$include_favorites_link = "'javascript:includeInCookie(\"".$listing->getNumber("id")."\",\"".EDIRECTORY_FOLDER."\",\"listing\")'";
		$remove_favorites_link = "'javascript:removeFromCookie(\"".$listing->getNumber("id")."\",\"".EDIRECTORY_FOLDER."\",\"listing\")'";
		$print_link = "print.php?id=".$listing->getNumber("id")."&keepThis=true&height=380&width=720";
		$map_link = "onclick='javascript:window.open(\"http://maps.google.com/maps?q=".$location_map."\",\"popup\",\"\")'";
		$promotion_link = "".PROMOTION_DEFAULT_URL."/promotion/promotion.php?id=".$listing->getNumber("promotion_id")."&keepThis=true&height=380&width=520";
		$claim_link = ((SSL_ENABLED == "on" && FORCE_MEMBERS_SSL == "on" && FORCE_CLAIM_SSL == "on") ? SECURE_URL : NON_SECURE_URL)."/claim.php?claimlistingid=".$listing->getNumber("id");

        // SOCIAL BOOKMARKING
        if (SOCIAL_BOOKMARKING != "on") {
        } else {
        
		    $listingLevelObj = new ListingLevel();
		    if ($listingLevelObj->getDetail($icon_listing_level) == "y") {
			    if (MODREWRITE_FEATURE == "on") {
				    $sbmLink = LISTING_DEFAULT_URL."/".$listing->getString("friendly_url").".html";
			    } else {
				    $sbmLink = LISTING_DEFAULT_URL."/detail.php?id=".$listing->getNumber("id");
			    }
		    } else {
			    $sbmLink = LISTING_DEFAULT_URL."/results.php?id=".$listing->getNumber("id");
		    }
		    $digg        = "href=\"http://digg.com/submit?phase=2&amp;url=".$sbmLink."&amp;title=".urlencode($listing->getString("title"))."\" target=\"_blank\"";
		    $delicious   = "href=\"http://del.icio.us/post?url=".$sbmLink."&amp;title=".urlencode($listing->getString("title"))."\" target=\"_blank\"";
		    $technorati  = "href=\"http://technorati.com/search/".$sbmLink."\" target=\"_blank\"";
		    $reddit      = "href=\"http://reddit.com/submit?url=".$sbmLink."&amp;title=".urlencode($listing->getString("title"))."\" target=\"_blank\"";
		    $stumbleupon = "href=\"http://www.stumbleupon.com/submit?url=".$sbmLink."&amp;title=".urlencode($listing->getString("title"))."\" target=\"_blank\"";
		    $furl        = "href=\"http://www.furl.net/storeIt.jsp?t=".urlencode($listing->getString("title"))."&amp;u=".$sbmLink."\" target=\"_blank\"";
		    $fark        = "href=\"http://cgi.fark.com/cgi/fark/submit.pl?new_url=".$sbmLink."&amp;headline=".urlencode($listing->getString("title"))."\" target=\"_blank\"";
		    $blinklist   = "href=\"http://www.blinklist.com/index.php?Action=Blink/addblink.php&amp;Url=".$sbmLink."&amp;title=".urlencode($listing->getString("title"))."\" target=\"_blank\"";
		    $slashdot    = "href=\"http://slashdot.org/bookmark.pl?url=".$sbmLink."&amp;title=".urlencode($listing->getString("title"))."\" target=\"_blank\"";
		    $newsvine    = "href=\"http://www.newsvine.com/_wine/save?popoff=0&amp;u=".$sbmLink."&amp;h=".urlencode($listing->getString("title"))."\" target=\"_blank\"";
		    unset($sbmLink);
		    unset($listingLevelObj);
        }

	} else {

		$friend_link = "";
		$include_favorites_link = "javascript:void(0);";
		$remove_favorites_link = "javascript:void(0);";
		$print_link = "";
		$map_link = "";
		$promotion_link = "";
		$claim_link = "javascript:void(0);";

		// SOCIAL BOOKMARKING
        if (SOCIAL_BOOKMARKING != "on") {
        } else {
            
		    $digg        = "href=\"javascript:void(0);\"";
		    $delicious   = "href=\"javascript:void(0);\"";
		    $technorati  = "href=\"javascript:void(0);\"";
		    $reddit      = "href=\"javascript:void(0);\"";
		    $stumbleupon = "href=\"javascript:void(0);\"";
		    $furl        = "href=\"javascript:void(0);\"";
		    $fark        = "href=\"javascript:void(0);\"";
		    $blinklist   = "href=\"javascript:void(0);\"";
		    $slashdot    = "href=\"javascript:void(0);\"";
		    $newsvine    = "href=\"javascript:void(0);\"";
        }

	}

	// SOCIAL BOOKMARKING IMAGES
    if (SOCIAL_BOOKMARKING != "on") {
    } else {
	    $digg_img        = "<img src=\"".DEFAULT_URL."/images/icon_digg.gif\" alt=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Digg\" title=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Digg\" />";
	    $delicious_img   = "<img src=\"".DEFAULT_URL."/images/icon_delicious.gif\" alt=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Delicious\" title=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Delicious\" />";
	    $technorati_img  = "<img src=\"".DEFAULT_URL."/images/icon_technorati.gif\" alt=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Technorati\" title=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Technorati\" />";
	    $reddit_img      = "<img src=\"".DEFAULT_URL."/images/icon_reddit.gif\" alt=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Reddit\" title=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Reddit\" />";
	    $stumbleupon_img = "<img src=\"".DEFAULT_URL."/images/icon_stumbleupon.gif\" alt=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Stumbleupon\" title=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Stumbleupon\" />";
	    $furl_img        = "<img src=\"".DEFAULT_URL."/images/icon_furl.gif\" alt=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Furl\" title=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Furl\" />";
	    $fark_img        = "<img src=\"".DEFAULT_URL."/images/icon_fark.gif\" alt=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Fark\" title=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Fark\" />";
	    $blinklist_img   = "<img src=\"".DEFAULT_URL."/images/icon_blinklist.gif\" alt=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Blinklist\" title=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Blinklist\" />";
	    $slashdot_img    = "<img src=\"".DEFAULT_URL."/images/icon_slashdot.gif\" alt=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Slashdot\" title=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Slashdot\" />";
	    $newsvine_img    = "<img src=\"".DEFAULT_URL."/images/icon_newsvine.gif\" alt=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Newsvine\" title=\"".system_showText(LANG_ADDTO_SOCIALBOOKMARKING)." Newsvine\" />";
    }
        
	$links = "";

	if ($listings_promotion_page) {
		$links .= "".system_showText(LANG_ICONPROMOTION)."";
	} else {
		$listingLevelObj = new ListingLevel();
		if ($listingLevelObj->getHasPromotion($icon_listing_level) == "y") {
			if ($listing->getNumber("promotion_id") > 0) {
				$promotion = new Promotion($listing->getNumber("promotion_id"));
				list ($year,$month,$day) = split ("-",$promotion->end_date);
				$end_date = mktime(0, 0, 0, (int)$month, (int)$day, (int)$year);
				$today = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
				$date=explode("-",$promotion->getString('start_date')); //Ymd
				$start_date=mktime(0,0,0,(int)$date[1],(int)$date[2],(int)$date[0]);
				if ($end_date >= $today) {
					$links .= "<a class=\"promocao\" href=\"$promotion_link\">";
				}
			}
		}
		unset($listingLevelObj);
	}


	if ($icon_listing_level == 70) {
	}

	if ($icon_listing_level == 70) {
		if (($listing->getString("address")) && ($listing->getNumber("bairro_id")) && ($listing->getNumber("cidade_id"))) {
		}
	}
	
	if ($listing->getNumber("promotion_id") > 0)  {

	$icon_navbar .= "
	<a href=\"javascript:void(0)\" onclick=\"tb_show('', '".PROMOTION_DEFAULT_URL."/promotion.php?width=525&amp;height=400&amp;id=".$listing->getNumber("promotion_id")."');void(0);\" title=\"Promo��es\" class=\"promocao\">
		<span>Promo��es</span>
	</a>";
	}

	$url = DEFAULT_URL;
	$listing_id = $listing->getNumber("id");
	$icon_navbar .= "
	<a href=\"$url/listing/blog.php?id=$listing_id\" title=\"Ver Blog\" class=\"blog\">
		<span>Blog</span>
	</a>";
	
	
	
?>
