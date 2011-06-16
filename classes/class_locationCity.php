<?



	# ----------------------------------------------------------------------------------------------------
	# * FILE: /classes/class_LocationCity.php
	# ----------------------------------------------------------------------------------------------------

	class LocationCity extends Handle {

		var $id;
		var $bairro_id;
		var $name;
		var $abbreviation;
		var $friendly_url;
		var $seo_description;
		var $seo_keywords;

		function LocationCity($var='') {
			if (is_numeric($var) && ($var)) {
				$db = db_getDBObject();
				$sql = "SELECT * FROM Location_City WHERE id = $var";
				$row = mysql_fetch_array($db->query($sql));
				$this->makeFromRow($row);
			}
			else {
				$this->makeFromRow($var);
			}
		}

		function makeFromRow($row='') {

			if ($row['id']) $this->id = $row['id'];
			else if (!$this->id) $this->id = 0;

			if ($row['bairro_id']) $this->bairro_id = $row['bairro_id'];
			else if (!$this->bairro_id) $this->bairro_id = 0;

			if ($row['name']) $this->name = $row['name'];
			else if (!$this->name) $this->name = "";

			$this->abbreviation = $row['abbreviation'];

			if ($row['friendly_url']) $this->friendly_url = $row['friendly_url'];
			else if (!$this->friendly_url) $this->friendly_url = "";

			$this->seo_description = $row['seo_description'];
			$this->seo_keywords = $row['seo_keywords'];

		}

		function Save() {

			$this->prepareToSave();

			$dbObj = db_getDBObject();

			$this->friendly_url = strtolower($this->friendly_url);

			if ($this->id) {
				$sql  = "UPDATE Location_City SET"
					. " id	 = $this->id,"
					. " region_id = $this->bairro_id,"
					. " name = $this->name,"
					. " abbreviation = $this->abbreviation,"
					. " friendly_url = $this->friendly_url,"
					. " seo_description = $this->seo_description,"
					. " seo_keywords = $this->seo_keywords"
					. " WHERE id = $this->id";
				$dbObj->query($sql);
			} else {
				$sql = "INSERT INTO Location_City"
					. " (id, region_id, name, abbreviation, friendly_url, seo_description, seo_keywords)"
					. " VALUES"
					. " ($this->id, $this->bairro_id, $this->name, $this->abbreviation, $this->friendly_url, $this->seo_description, $this->seo_keywords)";
				$dbObj->query($sql);
				$this->id = mysql_insert_id($dbObj->link_id);
			}

			$this->prepareToUse();

		}

		function Delete() {
			$dbObj = db_getDBObJect();
			$sql = "SELECT * FROM Location_Area WHERE city_id = $this->id";
			$result = $dbObj->query($sql);
			while($row = mysql_fetch_assoc($result)) $area_data[] = $row;
			if($area_data)
				foreach($area_data as $each_area){
					$locationArea = new LocationArea($each_area["id"]);
					$locationArea->Delete();
				}
			$sql = "DELETE FROM Location_City WHERE id = $this->id";
			$dbObj->query($sql);
		}

		function isRepeated(){
			if(!$this->name || !$this->bairro_id) return true;
			$dbObj = db_getDBObJect();
			$sql = "SELECT * FROM Location_City WHERE name = ".db_formatString($this->name)." AND region_id = $this->bairro_id";
			if($this->id) $sql .= " AND id != $this->id";
			$result = $dbObj->query($sql);
			$row = mysql_fetch_assoc($result);
			if($row) return true; else return false;
		}

		function retrievedIfRepeated() {

			$sql = "SELECT * FROM Location_City WHERE friendly_url = ".db_formatString($this->friendly_url)." AND region_id = $this->bairro_id";
			if ($this->id) $sql .= " AND id != $this->id";

			$dbObj = db_getDBObJect();
			$result = $dbObj->query($sql);
			$row = mysql_fetch_assoc($result);

			if ($row["id"]) {
				return $row["id"];
			} else {
				return false;
			}

		}

		function retrieveAllCities(){
			$dbObj = db_getDBObJect();
			$sql = "SELECT * FROM Location_City ORDER BY name";
			$result = $dbObj->query($sql);
			while($row = mysql_fetch_assoc($result)) $data[] = $row;
			if($data) return $data; else return false;
		}

		function retrieveCityById(){
			$dbObj = db_getDBObJect();
			$sql = "SELECT * FROM Location_City WHERE id = $this->id";
			$result = $dbObj->query($sql);
			$row = mysql_fetch_assoc($result);
			if($row) return $row; else return false;
		}

		function retrieveCitiesByRegion(){
			if(!$this->bairro_id) return false;
			$dbObj = db_getDBObJect();
			$sql = "SELECT * FROM Location_City WHERE region_id = $this->bairro_id ORDER BY name";
			$result = $dbObj->query($sql);
			while($row = mysql_fetch_assoc($result)) $data[] = $row;
			if($data) return $data; else return false;
		}

		function isValidFriendlyUrl(&$error_message) {

			if(!$this->getString("friendly_url")){
				$error_message = "&#149;&nbsp; Friendly Title is required, please do not leave it blank.";
				return false;
			}

			$dbObj = db_getDBObJect();

			$sql = "SELECT friendly_url FROM Location_City WHERE friendly_url = '".$this->getString("friendly_url")."'";

			if($this->getString("bairro_id"))
				$sql .= " AND region_id = $this->bairro_id ";

			if($this->getString("id"))
				$sql .= " AND id != ".$this->getString("id");

			$sql .= " LIMIT 1";

			$rs = $dbObj->query($sql);

			if(mysql_num_rows($rs) > 0){
				$error_message = "&#149;&nbsp; Friendly Title already in use, please choose another Friendly Title";
				return false;
			}

			if(!ereg(FRIENDLYURL_REGULAREXPRESSION, $this->getString("friendly_url"))){
				$error_message = "&#149;&nbsp; Friendly Url contain invalid chars";
				return false;
			}

			return true;

		}

	}
?>