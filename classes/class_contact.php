<?
	# ----------------------------------------------------------------------------------------------------
	# * FILE: /classes/class_contact.php
	# ----------------------------------------------------------------------------------------------------

	class Contact extends Handle {

		var $account_id;
		var $updated;
		var $entered;
		var $lang;
		var $first_name;
		var $last_name;
		var $company;
		var $address;
		var $address2;
		var $city;
		var $state;
		var $zip;
		var $country;
		var $phone;
		var $fax;
		var $email;
		var $url;

		function Contact($var='') {
			if (is_numeric($var) && ($var)) {
				$db = db_getDBObject();
				$sql = "SELECT * FROM Contact WHERE account_id = $var";
				$row = mysql_fetch_array($db->query($sql));
				$this->makeFromRow($row);
			}
			else {
				$this->makeFromRow($var);
			}
		}

		function makeFromRow($row='') {

		  if ($row['account_id']) $this->account_id = $row['account_id'];
			else if (!$this->account_id) $this->account_id = 0;
			if ($row['entered']) $this->entered = $row['entered'];
			else if (!$this->entered) $this->entered = 0;
			if ($row['updated']) $this->updated = $row['updated'];
			else if (!$this->updated) $this->updated = 0;

			$this->lang       = $row['lang'];
			$this->first_name = $row['first_name'];
			$this->last_name  = $row['last_name'];
			$this->company    = $row['company'];
			$this->address    = $row['address'];
			$this->address2   = $row['address2'];
			$this->city       = $row['city'];
			$this->state      = $row['state'];
			$this->zip        = $row['zip'];
			$this->country    = $row['country'];
			$this->phone      = $row['phone'];
			$this->fax        = $row['fax'];
			$this->email      = $row['email'];
			$this->url        = $row['url'];

		}

		function Save() {

			$this->prepareToSave();

			$dbObj = db_getDBObject();
			$sql  = "UPDATE Contact SET"
				. " updated = NOW(),"
				. " lang = $this->lang,"
				. " first_name = $this->first_name,"
				. " last_name = $this->last_name,"
				. " company = $this->company,"
				. " address = $this->address,"
				. " address2 = $this->address2,"
				. " city = $this->city,"
				. " state = $this->state,"
				. " zip = $this->zip,"
				. " country = $this->country,"
				. " phone = $this->phone,"
				. " fax = $this->fax,"
				. " email = $this->email,"
				. " url = $this->url"
				. " WHERE account_id = $this->account_id";
			$dbObj->query($sql);
			if (!mysql_affected_rows($dbObj->link_id)) {
				$sql = "INSERT INTO Contact"
					. " (account_id, updated, entered, lang, first_name, last_name, company, address, address2, city, state, zip, country,phone, fax, email, url)"
					. " VALUES"
					. " ($this->account_id, NOW(), NOW(), $this->lang, $this->first_name, $this->last_name, $this->company, $this->address, $this->address2, $this->city, $this->state, $this->zip, $this->country,$this->phone, $this->fax, $this->email, $this->url)";
				$dbObj->query($sql);
			}
			
			$this->prepareToUse();
		}

		function Delete() {
			$dbObj = db_getDBObJect();
			$sql = "DELETE FROM Contact WHERE account_id = $this->account_id";
			$dbObj->query($sql);
		}

	}

?>