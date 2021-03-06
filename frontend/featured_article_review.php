<?


	# ----------------------------------------------------------------------------------------------------
	# * FILE: /frontend/featured_article_review.php
	# ----------------------------------------------------------------------------------------------------
    setting_get('review_article_enabled', $review_enabled);

    if($review_enabled == 'on') {  
        # ----------------------------------------------------------------------------------------------------
        # LIMIT
        # ----------------------------------------------------------------------------------------------------
        $numberOfReviews = 3;
        $reviewMaxSize = 75;

	    # ----------------------------------------------------------------------------------------------------
	    # CODE
	    # ----------------------------------------------------------------------------------------------------
	    $sql = "SELECT item_id, added, reviewer_name, reviewer_location, review_title, review, rating FROM Review WHERE item_type = 'article' AND approved = 1 ORDER BY added DESC LIMIT " . $numberOfReviews;
	    $dbObj = db_getDBObject();
	    $result = $dbObj->query($sql);
        
	    if (mysql_numrows($result)) {

		    echo "<h2 class=\"standardTitle\">".system_showText(system_highlightLastWord(LANG_RECENT_REVIEWS))."</h2>";

            $currentReview = 1;
		    while($row = mysql_fetch_array($result)) {
                
                $article = new Article($row['item_id']);
                
                $rate_stars = "";
                if ($row['rating']) {
                    for ($x=0 ; $x < 5 ;$x++) {
                        if ($row['rating'] > $x) $rate_stars .= "<img src=\"".DEFAULT_URL."/images/img_rateMiniStarOn.gif\" alt=\"Star On\" align=\"bottom\" />";
                        else $rate_stars .= "<img src=\"".DEFAULT_URL."/images/img_rateMiniStarOff.gif\" alt=\"Star Off\" align=\"bottom\" />";
                    }
                }
	            
				if (MODREWRITE_FEATURE == "on") {
	                $detailLink 		= "".ARTICLE_DEFAULT_URL."/reviews/".$article->getString("friendly_url");
	                $detailItemLink 	= "".ARTICLE_DEFAULT_URL."/".$article->getString("friendly_url").".html";
				} else {
					$detailLink 		= "".ARTICLE_DEFAULT_URL."/comments.php?item_type=article&item_id=".$article->getString("id");
					$detailItemLink 	= "".ARTICLE_DEFAULT_URL."/detail.php?id=".$article->getNumber("id");
				}
				
			    echo "<div class=\"rateComments".(($currentReview < $numberOfReviews) ? " divisor" : "")."\">";

			    echo "<h3><a href=\"".$detailItemLink."\">".$article->getString('title')."</a></h3>";
			    
                echo "<div class=\"rateStars\">".$rate_stars."</div>";
                
			    echo "<h4 class=\"complementaryInfo\"><a href=\"".$detailLink."\">".$row['review_title']."</a></h4>";

				$publication_string = "";
				$publication_string .= "<p class=\"complementaryInfo\">";
					$publication_string .= "<strong>";
						$publication_string .= ($row['reviewer_name']) ? $row['reviewer_name'] : system_showText(LANG_NA);
					$publication_string .= "</strong>";
					$publication_string .= " ".system_showText(LANG_FROM)." ";
					$publication_string .= "<strong>";
						$publication_string .= ($row['reviewer_location']) ? $row['reviewer_location'] : system_showText(LANG_NA);
					$publication_string .= "</strong>";
					$publication_string .= "  - ".format_date($row['added'], DEFAULT_DATE_FORMAT." H:i:s", "datetime");
				$publication_string .= "</p>";
				echo $publication_string;
				$publication_string = "";

                $review = "";
                if (strlen(trim($row['review'])) > 0) {
                    if (strlen(trim($row['review'])) > $reviewMaxSize) {
                        $review .= substr($row['review'], 0, $reviewMaxSize) . "...";
                    } else {
                        $review .= trim($row['review']);
                    }
                }
                echo "<p class=\"review\">" . $review . "</p>";

			    echo "<p class=\"readMore\"><a href=\"".$detailLink."\">".system_showText(LANG_READMORE)." &raquo;</a></p>";
			    echo "</div>";
			    $currentReview++;

		    }

	    }
    }
?>