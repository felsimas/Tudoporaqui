<?

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		##################################################
		### KEYWORDS
		##################################################
		for ($i=0; $i<count(explode(",", EDIR_LANGUAGES)); $i++) {
			$labelsuffix = "";
			if ($i) $labelsuffix = $i;
			unset($arr_keywords);
			unset($each_keyword);
			unset($aux_kw);
			unset($new_arr_keywords);
			unset($aux_keywords);
			$arr_keywords = explode("\n", ${"keywords".$labelsuffix});
			foreach ($arr_keywords as $each_keyword) {
				$aux_kw = trim($each_keyword);
				if (strlen($aux_kw) > 0) {
					$new_arr_keywords[] = $aux_kw;
				}
			}
			if ($new_arr_keywords) $aux_keywords = implode(" || ", $new_arr_keywords);
			$_POST["keywords".$labelsuffix] = $aux_keywords;
			$_POST["array_keywords".$labelsuffix] = $new_arr_keywords;
		}
		##################################################

		$_POST["email"] = trim($_POST["email"]);
		$_POST["url"] = trim($_POST["url"]);

		$_POST["friendly_url"] = str_replace(".htm", "", $_POST["friendly_url"]);
		$_POST["friendly_url"] = str_replace(".html", "", $_POST["friendly_url"]);
		$_POST["friendly_url"] = trim($_POST["friendly_url"]);
		$sqlFriendlyURL = "";
		$sqlFriendlyURL .= " SELECT friendly_url FROM Listing WHERE friendly_url = ".db_formatString($_POST["friendly_url"])." ";
		if ($id) $sqlFriendlyURL .= " AND id != $id ";
		$sqlFriendlyURL .= " LIMIT 1 ";
		$dbObjFriendlyURL = db_getDBObject();
		$resultFriendlyURL = $dbObjFriendlyURL->query($sqlFriendlyURL);
		if (mysql_num_rows($resultFriendlyURL) > 0) {
			if ($id) $_POST["friendly_url"] = $_POST["friendly_url"].FRIENDLYURL_SEPARATOR.$id;
			else $_POST["friendly_url"] = $_POST["friendly_url"].FRIENDLYURL_SEPARATOR.uniqid();
		}

        $_POST["video_snippet"] = str_replace("\"", "'", $_POST["video_snippet"]);
		
		for ($i=0; $i<count(explode(",", EDIR_LANGUAGES)); $i++) {
			$labelsuffix = "";
			if ($i) $labelsuffix = $i;
			// strip \r chars provided by Windows, in order to keep character count standard
			if ($_POST["description".$labelsuffix]) {
				$_POST["description".$labelsuffix] = str_replace("\r", "", $_POST["description".$labelsuffix]);
			}
		}

		if($_POST["hours_work"]){
			$_POST["hours_work"] = str_replace("\r", "", $_POST["hours_work"]);
		}
		if($_POST["locations"]){
			$_POST["locations"] = str_replace("\r", "", $_POST["locations"]);
		}

		if ($_POST["newcity"] && $_POST["estado_id"] && $_POST["cidade_id"]) {
			$cityObj = new LocationRegion();
			$cityObj->setString("cidade_id", $_POST["cidade_id"]);
			$cityObj->setString("name", ucwords($_POST["newcity"]));
			$cityObj->setString("friendly_url", $_POST["newcity_friendly_url"]);
			$city_flag = $cityObj->retrievedIfRepeated();
			if ($city_flag) $cityObj->setNumber("id", $city_flag);
			else $cityObj->Save();
			$new_city_id = $cityObj->getNumber("id");
			$_POST["bairro_id"] = $new_city_id;
		}

		if ($_FILES['attachment_file']['name']) {
			$array_allowed_types = array('pdf','doc','txt','jpg','gif');
			$arr_attachment = explode(".",$_FILES['attachment_file']['name']);
			$attachment_extension = $arr_attachment[count($arr_attachment)-1];
			if (in_array(strtolower($attachment_extension),$array_allowed_types)) {
				$allow_attachment_file = "true";
			} else {
				$allow_attachment_file = "false";
			}
		}

		if ((validate_form("listing", $_POST, $message_listing)) && is_valid_discount_code($_POST["discount_id"], "listing", $_POST["id"], $message_listing, $discount_error_num) && ($allow_attachment_file != "false")) {

			// fixing url field if needed.
			if (trim($_POST["url"]) != "") {
				if (strpos($_POST["url"], "://") !== false) {
					$aux_url = explode("://", $_POST["url"]);
					$aux_url = $aux_url[1];
					$_POST["url"] = $aux_url;
				}
				$_POST["url"] = $_POST["url_protocol"] . $_POST["url"];
			}

			$upload_image = "no image";

			// Clean Image
			if ($remove_image) {
				$listing = new Listing($id);
				if ($idm = $listing->getNumber("image_id")) {
					$image = new Image($idm);
					if ($image) $image->Delete();
				}
				if ($idm = $listing->getNumber("thumb_id")) {
					$image = new Image($idm);
					if ($image) $image->Delete();
				}
				unset($listing);
			}

			// Clean Attachment
			if (($remove_attachment) || (file_exists($_FILES['attachment_file']['tmp_name']))) {
				if ($id) {
					$listing = new Listing($id);
					if ($id_attachment_file = $listing->getString("attachment_file")) {
						if (file_exists(EXTRAFILE_DIR."/".$id_attachment_file)) {
							@unlink(EXTRAFILE_DIR."/".$id_attachment_file);
						}
						$listing->setString("attachment_file", "");
						$_POST["attachment_file"] = "";
						$listing->save();
					}
					unset($listing);
				}
			}

			if (file_exists($_FILES['image']['tmp_name'])) {
				$imageArray = image_uploadForItem($_FILES['image']['tmp_name'], IMAGE_LISTING_FULL_WIDTH, IMAGE_LISTING_FULL_HEIGHT, IMAGE_LISTING_THUMB_WIDTH, IMAGE_LISTING_THUMB_HEIGHT);
				if ($imageArray["success"]) {
					$upload_image = "success";
					$remove_image = false;
				}
				else $upload_image = "failed";
			}

			if ($upload_image != "failed") {

				$status = new ItemStatus();

				$listing = new Listing($id);

				if (!$listing->getString("id") || $listing->getString("id") == 0){

					$message = system_showText(LANG_MSG_LISTING_SUCCESSFULLY_ADDED);
					$emailNotification = true;

					$newest = "1";

					$listingLevelObj = new ListingLevel(EDIR_DEFAULT_LANGUAGE, true);
					if ($listingLevelObj->getHasPromotion($_POST["level"]) == "y") $extramessage_promotion = "1";
					if (($listingLevelObj->getImages($_POST["level"]) > 0) || ($listingLevelObj->getImages($_POST["level"]) == -1)) $extramessage_gallery = "1";

					$listing->makeFromRow($_POST);
					$listing->setString("status", $status->getDefaultStatus());
					$listing->setDate("renewal_date", "00/00/0000");

				} else {

					$message = system_showText(LANG_MSG_LISTING_SUCCESSFULLY_UPDATED);

					$emailNotification = false;
					if ($listing->getString("status") != $status->getDefaultStatus()) $emailNotification = true;

					//security issue
					unset($_POST["status"]);
					unset($_POST["renewal_date"]);

					if (!$listing->hasRenewalDate()) {
						$_POST["renewal_date"] = "0000-00-00";
					}

					if (strpos($url_base, "/gerenciamento")) {

						$_POST["status"] = $listing->getString("status");

						if ($listing->getNumber("account_id") != $_POST["account_id"]) {
							// remove relationship if sitemgr change account
							$listing->setNumber("promotion_id", 0);
							$listing->setGalleries();
						}

					}

					$listing->makeFromRow($_POST);

				}

				if ($upload_image == "success") {
					$listing->updateImage($imageArray);
				}

				if ($id) {
					if(!$membros) {
						$lcObj = new ListingChoice();
						$lcObj->setNumber("listing_id", $id);
						$lcObj->Delete();
					} else {
						$choices = db_getFromDB("editor_choice", "available", 1, "all", "id", "object");
						if($choices) {
							foreach($choices as $choice) {
								$lcObj = new ListingChoice($choice->getNumber("id"), $id);
								$lcObj->DeleteAvailable();
							}
						}
					}
				}

				if ($remove_image) {
					$listing->setNumber("image_id", 0);
					$listing->setNumber("thumb_id", 0);
				}

				$levelObjTmp = new ListingLevel(EDIR_DEFAULT_LANGUAGE, true);
				$levelsTmp = $levelObjTmp->getLevelValues();
				if (!in_array($listing->getNumber("level"), $levelsTmp)) {
					$listing->setNumber("level", $levelObjTmp->getDefaultLevel());
				}
				unset($levelObjTmp);
				unset($levelsTmp);

				$listing->Save();

				// ATTACHMENT FILE UPLOAD
				if ((file_exists($_FILES['attachment_file']['tmp_name']))) {
					$file_name = "attach_".$listing->getNumber("id").".".$attachment_extension;
					$listing->setString("attachment_file",$file_name);
					$file_path = EXTRAFILE_DIR."/".$file_name;
					if (filesize($_FILES['attachment_file']['tmp_name'])) {
						copy($_FILES['attachment_file']['tmp_name'],$file_path);
					} else {
						$listing->setString("attachment_file","");
						$message .= "<br />".system_showText(LANG_SITEMGR_MSGERROR_ATTACHEDFILEWASDENIED);
					}
					$listing->Save();
				}

				if ($_POST['choice']) {
					foreach ($_POST['choice'] as $value) {
						$listingChoiceObj = new ListingChoice($value, $id);
						$listingChoiceObj->setNumber("editor_choice_id", $value);
						$listingChoiceObj->setNumber("listing_id", $listing->getNumber("id"));
						$listingChoiceObj->Save();
						unset($listingChoiceObj);
					}
				}

				if (ZIPCODE_PROXIMITY == "on") {
					zipproximity_updateDB("Listing", $listing->getNumber("id"));
				}

				/**
				*
				* E-mail notify
				*
				******************************************************/
				if ($listing->getNumber("account_id") > 0) {
					if($message == system_showText(LANG_MSG_LISTING_SUCCESSFULLY_ADDED)) {
						$contactObj = new Contact($listing->getNumber("account_id"));
                        $listingType = "";
                        if($listing->getString('tipo_assinante') == 1) {$listingType = SYSTEM_NEW_LISTING_UTILIDADE_PUBLICA;}
                        if($listing->getString('tipo_assinante') == 2) {$listingType = SYSTEM_NEW_LISTING_GRATUITO;}
                        if($listing->getString('tipo_assinante') == 30) {$listingType = SYSTEM_NEW_LISTING_ASSINANTE;}
                        if($listing->getString('tipo_assinante') == 90) {$listingType = SYSTEM_NEW_LISTING_ASSINANTE;}
                        if($listing->getString('tipo_assinante') == 180) {$listingType = SYSTEM_NEW_LISTING_ASSINANTE;}
                        if($listing->getString('tipo_assinante') == 360) {$listingType = SYSTEM_NEW_LISTING_ASSINANTE;}
						if($emailNotificationObj = system_checkEmail($listingType, $contactObj->getString("lang"))) {
							setting_get("sitemgr_send_email", $sitemgr_send_email);
							setting_get("sitemgr_email", $sitemgr_email);
							$sitemgr_emails = split(",", $sitemgr_email);
							if ($sitemgr_emails[0]) $sitemgr_email = $sitemgr_emails[0];
							$subject = $emailNotificationObj->getString("subject");
							$body = $emailNotificationObj->getString("body");
							$body = system_replaceEmailVariables($body,$listing->getNumber('id'),'listing');
							$subject = system_replaceEmailVariables($subject,$listing->getNumber('id'),'listing');
							$body = html_entity_decode($body);
							$subject = html_entity_decode($subject);
							$error = false;
							system_mail($contactObj->getString("email"), $subject, $body, EDIRECTORY_TITLE." <$sitemgr_email>", $emailNotificationObj->getString("content_type"), "", $emailNotificationObj->getString("bcc"), $error);
						}
					}
				}
				if ($emailNotification) {
					if(!strpos($url_base, "/gerenciamento")){
						setting_get("sitemgr_send_email",$sitemgr_send_email);
						setting_get("sitemgr_email",$sitemgr_email);
						$sitemgr_emails = split(",",$sitemgr_email);
						setting_get("sitemgr_listing_email",$sitemgr_listing_email);
						$sitemgr_listing_emails = split(",",$sitemgr_listing_email);
						$account = new Account($acctId);
						$contact = new Contact($acctId);
						$sitemgr_msg = "
							<html>
								<head>
									<style>
										.email_style_settings{
											font-size:12px;
											font-family:Verdana, Arial, Sans-Serif;
											color:#000;
										}
									</style>
								</head>
								<body>
									<div class=\"email_style_settings\">
										Administrador,<br /><br />";
						if ($_POST["id"]) $sitemgr_msg .= "O estabelecimento \"".$listing->getString("title")."\" foi criado por \"".system_showAccountUserName($account->getString("username"))."\" e precisa de sua aprovacao.<br /><br />";
						else $sitemgr_msg .= "O estabelecimento \"".$listing->getString("title")."\" foi criado por \"".system_showAccountUserName($account->getString("username"))."\" e precisa de sua aprovacao.<br /><br />";
						$sitemgr_msg .= "
										<a href=\"".DEFAULT_URL."/gerenciamento/listing/view.php?id=".$listing->getNumber("id")."\" target=\"_blank\">".DEFAULT_URL."/gerenciamento/listing/view.php?id=".$listing->getNumber("id")."</a><br /><br />
									</div>
								</body>
							</html>"; 
						// sending e-mail to site manager
						$error = false;
						if ($sitemgr_send_email == "on") {
							if ($sitemgr_emails[0]) {
								foreach ($sitemgr_emails as $sitemgr_email) {
									system_mail($sitemgr_email, "Novo estabelecimento '".$listing->getString("title")."'", $sitemgr_msg, EDIRECTORY_TITLE." <".$sitemgr_email.">", "text/html", '', '', $error);
								}
							}
						}
						if ($sitemgr_listing_emails[0]) {
							foreach ($sitemgr_listing_emails as $sitemgr_listing_email) {
								system_mail($sitemgr_listing_email, "[".EDIRECTORY_TITLE."] ".ucwords(LISTING_FEATURE_NAME), $sitemgr_msg, EDIRECTORY_TITLE." <".$sitemgr_listing_email.">", "text/html", '', '', $error);
							}
						}
					}
				}
				/******************************************************/

				// setting categories
				$return_categories_array = explode(",", $return_categories);
				$listing->setCategories($return_categories_array); // MUST BE ALWAYS AFTER $LISTINGOBJECT->SAVE();

				if ($process == "claim") {

					$claimObject = new Claim($claim_id);

					$claimObject->setString("step", "c");

					$claimObject->setString("listing_title", $listing->getString("title", false));
					$claimObject->setString("new_estado_id", $listing->getNumber("estado_id"));
					$claimObject->setString("new_cidade_id", $listing->getNumber("cidade_id"));
					$claimObject->setString("new_bairro_id", $listing->getNumber("bairro_id"));
					$claimObject->setString("new_city_id", $listing->getNumber("city_id"));
					$claimObject->setString("new_area_id", $listing->getNumber("area_id"));
					$claimObject->setString("new_title", $listing->getString("title", false));
                    $claimObject->setString("new_cnpj", $listing->getString("cnpj", false));
					$claimObject->setString("new_friendly_url", $listing->getString("friendly_url", false));
					$claimObject->setString("new_email", $listing->getString("email", false));
					$claimObject->setString("new_url", $listing->getString("url", false));
					$claimObject->setString("new_phone", $listing->getString("phone", false));
                    $claimObject->setString("new_phone2", $listing->getString("phone2", false));
                    $claimObject->setString("new_celular", $listing->getString("celular", false));
					$claimObject->setString("new_fax", $listing->getString("fax", false));
					$claimObject->setString("new_address", $listing->getString("address", false));
					$claimObject->setString("new_address2", $listing->getString("address2", false));
					$claimObject->setString("new_zip_code", $listing->getString("zip_code", false));
					$claimObject->setString("new_level", $listing->getNumber("level"));
					$claimObject->setString("new_listingtemplate_id", $listing->getNumber("listingtemplate_id"));

					$claimObject->save();

					if ($listing->needToCheckOut()) {
						header("Location: ".str_replace("estabelecimentos", "listing", $url_redirect)."/billing.php?claimlistingid=".$id);
					} else {
						$claimObject->setString("step", "e");
						$claimObject->save();
						header("Location: ".DEFAULT_URL."/membros/claim/claimfinish.php?claimlistingid=".$claimlistingid);
					}

				} else { 

					header("Location: ".str_replace("estabelecimentos", "listing", $url_redirect)."/".(($search_page) ? "search.php" : "index.php")."?process=".$process."&newest=".$newest."&message=".urlencode($message)."&extramessage_gallery=".$extramessage_gallery."&extramessage_promotion=".$extramessage_promotion."&screen=$screen&letra=$letra".(($url_search_params) ? "&$url_search_params" : ""));

				}

				exit;

			} else if ($upload_image == "failed") $message_listing .= "<br />".system_showText(LANG_MSG_INVALID_IMAGE_TYPE);

		} else if ($allow_attachment_file == "false") $message_listing .= "<br />".system_showText(LANG_MSG_ATTACHED_FILE_DENIED)."<br />";

		// DON'T REMOVE THIS CODE - PROBLEM INTO FORMAT_MAGICQUOTES
		$auxPostChoice = $_POST["choice"];
		$auxGetChoice = $_GET["choice"];
		// DON'T REMOVE THIS CODE - PROBLEM INTO FORMAT_MAGICQUOTES

		// removing slashes added if required
		$_POST = format_magicQuotes($_POST);
		$_GET  = format_magicQuotes($_GET);

		// DON'T REMOVE THIS CODE - PROBLEM INTO FORMAT_MAGICQUOTES
		$_POST["choice"] = $auxPostChoice;
		$_GET["choice"] = $auxGetChoice;
		// DON'T REMOVE THIS CODE - PROBLEM INTO FORMAT_MAGICQUOTES

		extract($_POST);
		extract($_GET);

	}

	$video_snippet = str_replace("\"", "'", $video_snippet);

	# ----------------------------------------------------------------------------------------------------
	# FORMS DEFINES
	# ----------------------------------------------------------------------------------------------------
	$id = $_GET["id"] ? $_GET["id"] : $_POST["id"];


	if ($id) {
		if (strpos($url_base, "/membros")) {
			//$by_key = array("id", "account_id");
			//$by_value = array(db_formatNumber($id), sess_getAccountIdFromSession());
			//$listing = db_getFromDB("listing", $by_key, $by_value);
            $listing = db_getFromDB("listing", "id", db_formatNumber($id));
		} else {
			$listing = db_getFromDB("listing", "id", db_formatNumber($id));
		}


		if ((sess_getAccountIdFromSession() != $listing->getNumber("account_id")) && (!strpos($url_base, "/gerenciamento"))  && (!strpos($url_base, "/membros"))) {
			//ECHO "Location: $url_redirect/".(($search_page) ? "search.php" : "index.php")."?message=".urlencode($message)."&screen=$screen&letra=$letra".(($url_search_params) ? "&$url_search_params" : "" )."";
            header("Location: ".str_replace("estabelecimentos", "listing", $url_redirect)."/".(($search_page) ? "search.php" : "index.php")."?message=".urlencode($message)."&screen=$screen&letra=$letra".(($url_search_params) ? "&$url_search_params" : "" )."");
			exit;
		}

		$listing->extract();

		// Location defines begin for edit listing
		$countryObj = new LocationCountry();
		$countries  = $countryObj->retrieveAllCountries();


		if($estado_id) {
			$stateObj = new LocationState();
			$stateObj->SetString("estado_id",$estado_id);
			$selected_states = $stateObj->retrieveStatesByCountry();
		}

		if($cidade_id) {
			$regionObj = new LocationRegion();
			$regionObj->SetString("cidade_id",$cidade_id);
			$selected_regions = $regionObj->retrieveRegionsByState();
		}

		if($bairro_id) {
			$cityObj = new LocationCity();
			$cityObj->SetString("bairro_id",$bairro_id);
			$selected_cities = $cityObj->retrieveCitiesByRegion();
		}

		if($city_id) {
			$areaObj = new LocationArea();
			$areaObj->SetString("city_id",$city_id);
			$selected_areas = $areaObj->retrieveAreasByCity();
		}

		$selected_country = ($estado_id) ? new LocationCountry($estado_id) : FALSE;
		$selected_state   = ($cidade_id)   ? new LocationState($cidade_id)     : FALSE;
		$selected_region  = ($bairro_id)  ? new LocationRegion($bairro_id)   : FALSE;
		$selected_city    = ($city_id)    ? new LocationCity($city_id)       : FALSE;
		$selected_area    = ($area_id)    ? new LocationArea($area_id)       : FALSE;

	} else {

		$listing = new Listing($id);
		$listing->makeFromRow($_POST);

		if ($acctId) $account_id = $acctId; else $account_id = $account_id;

		// Location defines begin for add listing
		$countryObj = new LocationCountry();
		$countries  = $countryObj->retrieveAllCountries();

		if($_POST["estado_id"]) {
			$stateObj = new LocationState();
			$stateObj->SetString("estado_id",$_POST["estado_id"]);
			$selected_states = $stateObj->retrieveStatesByCountry();
		}

		if($_POST["cidade_id"]) {
			$regionObj = new LocationRegion();
			$regionObj->SetString("cidade_id",$_POST["cidade_id"]);
			$selected_regions = $regionObj->retrieveRegionsByState();
		}

		if($_POST["bairro_id"]) {
			$cityObj = new LocationCity();
			$cityObj->SetString("bairro_id",$_POST["bairro_id"]);
			$selected_cities = $cityObj->retrieveCitiesByRegion();
		}

		if($_POST["city_id"]) {
			$areaObj = new LocationArea();
			$areaObj->SetString("city_id",$_POST["city_id"]);
			$selected_areas = $areaObj->retrieveAreasByCity();
		}

		$selected_country = ($_POST["estado_id"]) ? new LocationCountry($_POST["estado_id"]) : FALSE;
		$selected_state   = ($_POST["cidade_id"])   ? new LocationState($_POST["cidade_id"])     : FALSE;
		$selected_region  = ($_POST["bairro_id"])  ? new LocationRegion($_POST["bairro_id"])   : FALSE;
		$selected_city    = ($_POST["city_id"])    ? new LocationCity($_POST["city_id"])       : FALSE;
		$selected_area    = ($_POST["area_id"])    ? new LocationArea($_POST["area_id"])       : FALSE;

	}

	extract($_POST);
	extract($_GET);

	// level
	$levelObj = new ListingLevel(EDIR_DEFAULT_LANGUAGE, true);
	if ($level) {
		$levelArray[$levelObj->getLevel($level)] = $level;
	} else {
		$levelArray[$levelObj->getLevel($levelObj->getDefaultLevel())] = $levelObj->getDefaultLevel();
	}

	$langIndex = language_getIndex(EDIR_LANGUAGE);
	$categories = "";
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if ($return_categories) {
			$return_categories_array = explode(",", $return_categories);
			foreach ($return_categories_array as $each_category) {
				$categories[] = new ListingCategory($each_category);
			}
		}
	} else {
		if (!$categories) if ($listing) $categories = $listing->getCategories();
	}
	if ($categories) {
		for ($i=0; $i<count($categories); $i++) {
			if ($categories[$i]->getString("title".$langIndex)) $arr_category[$i]["name"] = $categories[$i]->getString("title".$langIndex);
			else $arr_category[$i]["name"] = $categories[$i]->getString("title");
			$arr_category[$i]["value"] = $categories[$i]->getNumber("id");
			$arr_return_categories[] = $categories[$i]->getNumber("id");
		}
		if ($arr_return_categories) $return_categories = implode(",", $arr_return_categories);
		array_multisort($arr_category);
		$feedDropDown = "<select name='feed' multiple size='5' style=\"width:500px\">";
		if ($arr_category) foreach ($arr_category as $each_category) {
			$feedDropDown .= "<option value='".$each_category["value"]."'>".$each_category["name"]."</option>";
		}
		$feedDropDown .= "</select>";
	} else {
		if ($return_categories) {
			$return_categories_array = explode(",", $return_categories);
			if ($return_categories_array) {
				foreach ($return_categories_array as $each_category) {
					$categories[] = new ListingCategory($each_category);
				}
			}
		}
		$feedDropDown = "<select name='feed' multiple size='5' style=\"width:500px\">";
		if ($categories) {
			foreach ($categories as $category) {
				if ($category->getString("title".$langIndex)) $name = $category->getString("title".$langIndex);
				else $name = $category->getString("title");
				$feedDropDown .= "<option value='".$category->getNumber("id")."'>$name</option>";
			}
		}
		$feedDropDown .= "</select>";
	}

	##################################################
	### KEYWORDS
	##################################################
	for ($i=0; $i<count(explode(",", EDIR_LANGUAGES)); $i++) {
		$labelsuffix = "";
		if ($i) $labelsuffix = $i;
		unset($arr_keywords);
		if ($_POST["keywords".$labelsuffix]) {
			$arr_keywords = explode(" || ", $_POST["keywords".$labelsuffix]);
			${"keywords".$labelsuffix} = implode("\n", $arr_keywords);
		} elseif ($listing->getString("keywords".$labelsuffix)) {
			$arr_keywords = explode(" || ", $listing->getString("keywords".$labelsuffix));
			${"keywords".$labelsuffix} = implode("\n", $arr_keywords);
		}
	}
	##################################################

	# ----------------------------------------------------------------------------------------------------
	# EDITOR CHOICE DEFINITION
	# ----------------------------------------------------------------------------------------------------
	if(!$membros) {
		$editorChoices = db_getFromDB("editor_choice", "", "", "all", "id", "object");
	} else {
		$editorChoices = db_getFromDB("editor_choice", "available", 1, "all", "id", "object");
	}

	$video_snippet = str_replace("\"", "'", $video_snippet);

	$templateObj = new ListingTemplate($listingtemplate_id);

?>
