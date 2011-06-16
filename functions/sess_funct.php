<?



	# ----------------------------------------------------------------------------------------------------
	# * FILE: /functions/sess_funct.php
	# ----------------------------------------------------------------------------------------------------

	# ----------------------------------------------------------------------------------------------------
	# * MEMBERS
	# ----------------------------------------------------------------------------------------------------

	function sess_authenticateAccount($username, $password, &$authmessage) {

		$dbObj = db_getDBObject();

		####################################################################################################
		### BEGIN - MEMBER
		####################################################################################################
		$sql = "SELECT faillogin_count, faillogin_datetime FROM Account WHERE foreignaccount = 'n' AND username = ".db_formatString($username)."";
		$row = mysql_fetch_assoc($dbObj->query($sql));
		$faillogin_count = $row["faillogin_count"];
		$faillogin_datetime = $row["faillogin_datetime"];
		if (($faillogincount = (int)($faillogin_count / (FAILLOGIN_MAXFAIL+1))) > 0) {
			if (($faillogin_count % (FAILLOGIN_MAXFAIL+1)) == 0) {
				$faillogindatetime = split("[: -]", $faillogin_datetime);
				$failloginnow = split("[: -]", date("Y-m-d H:i:s"));
				if (($failloginsec = (mktime($failloginnow[3], $failloginnow[4], $failloginnow[5], $failloginnow[1], $failloginnow[2], $failloginnow[0]) - mktime($faillogindatetime[3], $faillogindatetime[4], $faillogindatetime[5], $faillogindatetime[1], $faillogindatetime[2], $faillogindatetime[0]))) < ($faillogincount*FAILLOGIN_TIMEBLOCK*60)) {
					$authmessage = system_showText(LANG_MSG_ACCOUNTLOCKED1)." ".(($faillogincount*FAILLOGIN_TIMEBLOCK)-(int)($failloginsec/60))." ".system_showText(LANG_MSG_ACCOUNTLOCKED2);
					return false;
				}
			}
		}
		####################################################################################################
		### END - MEMBER
		####################################################################################################

		$sql = "SELECT * FROM Account WHERE foreignaccount = 'n' AND username = ".db_formatString($username)." AND password = ".db_formatString(((strtolower(PASSWORD_ENCRYPTION) == "on") ? md5($password) : $password));
		$row = mysql_fetch_array($dbObj->query($sql));
		if (mysql_affected_rows($dbObj->link_id)) {
			$sql = "UPDATE Account SET faillogin_count = 0, faillogin_datetime = '0000-00-00 00:00:00' WHERE foreignaccount = 'n' AND username = ".db_formatString($username)."";
			$dbObj->query($sql);
			return true;
		} else {
			$sql = "UPDATE Account SET faillogin_count = faillogin_count + 1, faillogin_datetime = NOW() WHERE foreignaccount = 'n' AND username = ".db_formatString($username)."";
			$dbObj->query($sql);
			$authmessage = system_showText(LANG_MSG_USERNAME_OR_PASSWORD_INCORRECT);
			return false;
		}

	}

	function sess_registerAccountInSession($username) {

		session_start(sess_generateSessIdString());

		if ($_SESSION[SM_LOGGEDIN]) {
			$dbLogoutObj = db_getDBObject();
			if ($_SESSION[SESS_SM_ID]) {
				$smacctObj = db_getFromDB("smaccount", "id", db_formatNumber($_SESSION[SESS_SM_ID]));
				$logoutSQL = "INSERT INTO Report_Login (datetime, ip, type, page, username) values (NOW(), ".db_formatString(getenv("REMOTE_ADDR")).", 'logout', ".db_formatString($_SERVER["PHP_SELF"]).", ".db_formatString($smacctObj->getString("username")).")";
			} else {
				setting_get("sitemgr_username", $smusername);
				$logoutSQL = "INSERT INTO Report_Login (datetime, ip, type, page, username) values (NOW(), ".db_formatString(getenv("REMOTE_ADDR")).", 'logout', ".db_formatString($_SERVER["PHP_SELF"]).", ".db_formatString($smusername).")";
			}
			$dbLogoutObj->query($logoutSQL);
		}

		unset($_SESSION[SM_LOGGEDIN]);
		unset($_SESSION[SESS_SM_ID]);
		unset($_SESSION[SESS_SM_PERM]);
		unset($_SESSION[SESS_SM_PERM_ACTION]);

		session_unset();

		$acctObj = db_getFromDB("account", "username", db_formatString($username));
		if ($acctObj) $acctObj->updateLastLogin();
		$_SESSION[SESS_ACCOUNT_ID] = $acctObj->getNumber("id");

		$dbLoginObj = db_getDBObject();
		$loginSQL = "INSERT INTO Report_Login (datetime, ip, type, page, username) values (NOW(), ".db_formatString(getenv("REMOTE_ADDR")).", 'login', ".db_formatString($_SERVER["PHP_SELF"]).", ".db_formatString($username).")";
		$dbLoginObj->query($loginSQL);

	}

	function sess_logoutAccount() {

		session_start();

		if ($_SESSION[SESS_ACCOUNT_ID]) {
			$dbLogoutObj = db_getDBObject();
			$acctObj = db_getFromDB("account", "id", db_formatNumber($_SESSION[SESS_ACCOUNT_ID]));
			$logoutSQL = "INSERT INTO Report_Login (datetime, ip, type, page, username) values (NOW(), ".db_formatString(getenv("REMOTE_ADDR")).", 'logout', ".db_formatString($_SERVER["PHP_SELF"]).", ".db_formatString($acctObj->getString("username")).")";
			$dbLogoutObj->query($logoutSQL);
		}

		session_unset();
		setcookie(session_name(), '', (time () - 2592000), '/', '', 0);
		setcookie("automatic_login", "false", time()+60*60*24*30, "".EDIRECTORY_FOLDER."/membros");
		session_destroy();
		//header("Location: ".MEMBERS_LOGIN_PAGE);
		header("Location: ".DEFAULT_URL."");
		exit;

	}

	function sess_validateSession() {

		global $_COOKIE;

		session_start();

		if (!empty($_SESSION[SESS_ACCOUNT_ID]) || ($_COOKIE["automatic_login"] == "true")) {
			if (!empty($_SESSION[SESS_ACCOUNT_ID])) {
				$acctObj = db_getFromDB("account", "id", db_formatNumber($_SESSION[SESS_ACCOUNT_ID]));
				if (!$acctObj || !$acctObj->getNumber("id") || ($acctObj->getNumber("id") <= 0)) sess_logoutAccount();
			}
			if (($_COOKIE["automatic_login"] == "true") && empty($_SESSION[SESS_ACCOUNT_ID])) sess_registerAccountInSession($_COOKIE["username"]);
		} else {
			header("Location: ".MEMBERS_LOGIN_PAGE."?destiny=".$_SERVER["PHP_SELF"]."&query=".$_SERVER["QUERY_STRING"]);
			exit;
		}

		$accountObj = db_getFromDB("account", "id", db_formatNumber($_SESSION[SESS_ACCOUNT_ID]));
		if ($accountObj->getNumber("id") > 0) {
			if (($accountObj->getString("foreignaccount") == "y") && ($accountObj->getString("foreignaccount_done") == "n")) {
				if ((strpos($_SERVER["PHP_SELF"], "/account.php") === false) && (strpos($_SERVER["PHP_SELF"], "/logout.php") === false)) {
					header("Location: ".DEFAULT_URL."/membros/account/account.php?id=".$accountObj->getNumber("id"));
					exit;
				}
			}
		}

	}

	# ----------------------------------------------------------------------------------------------------
	# * SITEMGR
	# ----------------------------------------------------------------------------------------------------

	function sess_authenticateSM($username, $password, &$authmessage) {

		$dbObj = db_getDBObject();

		$username = db_formatString($username);
		$sql = "SELECT * FROM Setting WHERE name = 'sitemgr_username' AND value = $username";
		$row = mysql_fetch_array($dbObj->query($sql));
		if (mysql_affected_rows($dbObj->link_id)) {

			####################################################################################################
			### BEGIN - SUPER SITE MANAGER
			####################################################################################################
			setting_get("sitemgr_faillogin_count", $faillogin_count);
			setting_get("sitemgr_faillogin_datetime", $faillogin_datetime);
			if (($faillogincount = (int)($faillogin_count / (FAILLOGIN_MAXFAIL+1))) > 0) {
				if (($faillogin_count % (FAILLOGIN_MAXFAIL+1)) == 0) {
					$faillogindatetime = split("[: -]", $faillogin_datetime);
					$failloginnow = split("[: -]", date("Y-m-d H:i:s"));
					if (($failloginsec = (mktime($failloginnow[3], $failloginnow[4], $failloginnow[5], $failloginnow[1], $failloginnow[2], $failloginnow[0]) - mktime($faillogindatetime[3], $faillogindatetime[4], $faillogindatetime[5], $faillogindatetime[1], $faillogindatetime[2], $faillogindatetime[0]))) < ($faillogincount*FAILLOGIN_TIMEBLOCK*60)) {
						$authmessage = system_showText(LANG_MSG_ACCOUNTLOCKED1)." ".(($faillogincount*FAILLOGIN_TIMEBLOCK)-(int)($failloginsec/60))." ".system_showText(LANG_MSG_ACCOUNTLOCKED2);
						return false;
					}
				}
			}
			####################################################################################################
			### END - SUPER SITE MANAGER
			####################################################################################################

			$sql = "SELECT * FROM Setting WHERE name = 'sitemgr_password' AND value = ".db_formatString(md5($password))."";
			$row = mysql_fetch_array($dbObj->query($sql));
			if (mysql_affected_rows($dbObj->link_id)) {
				setting_set("sitemgr_faillogin_count", "0");
				setting_set("sitemgr_faillogin_datetime", "0000-00-00 00:00:00");
				return true;
			} else {
				setting_get("sitemgr_faillogin_count", $sitemgr_faillogin_count);
				setting_set("sitemgr_faillogin_count", $sitemgr_faillogin_count+1);
				setting_set("sitemgr_faillogin_datetime", date("Y-m-d H:i:s"));
			}

		} else {

			####################################################################################################
			### BEGIN - SITE MANAGER
			####################################################################################################
			$sql = "SELECT faillogin_count, faillogin_datetime FROM SMAccount WHERE username = $username";
			$row = mysql_fetch_assoc($dbObj->query($sql));
			$faillogin_count = $row["faillogin_count"];
			$faillogin_datetime = $row["faillogin_datetime"];
			if (($faillogincount = (int)($faillogin_count / (FAILLOGIN_MAXFAIL+1))) > 0) {
				if (($faillogin_count % (FAILLOGIN_MAXFAIL+1)) == 0) {
					$faillogindatetime = split("[: -]", $faillogin_datetime);
					$failloginnow = split("[: -]", date("Y-m-d H:i:s"));
					if (($failloginsec = (mktime($failloginnow[3], $failloginnow[4], $failloginnow[5], $failloginnow[1], $failloginnow[2], $failloginnow[0]) - mktime($faillogindatetime[3], $faillogindatetime[4], $faillogindatetime[5], $faillogindatetime[1], $faillogindatetime[2], $faillogindatetime[0]))) < ($faillogincount*FAILLOGIN_TIMEBLOCK*60)) {
						$authmessage = system_showText(LANG_MSG_ACCOUNTLOCKED1)." ".(($faillogincount*FAILLOGIN_TIMEBLOCK)-(int)($failloginsec/60))." ".system_showText(LANG_MSG_ACCOUNTLOCKED2);
						return false;
					}
				}
			}
			####################################################################################################
			### END - SITE MANAGER
			####################################################################################################

			$sql = "SELECT * FROM SMAccount WHERE username = $username AND password = ".db_formatString(md5($password))."";
			$row = mysql_fetch_array($dbObj->query($sql));
			if (mysql_affected_rows($dbObj->link_id)) {

				$hasAccess = false;
				$remote_ipaddress = explode(".", $_SERVER["REMOTE_ADDR"]);
				$iprestrictions = explode("\n", $row["iprestriction"]);
				foreach ($iprestrictions as $iprestriction) {
					$iprestriction = str_replace("\r", "", $iprestriction);
					if ($iprestriction) {
						$iprestriction = explode(".", $iprestriction);
						if ($iprestriction[0] == "*") {
							$hasAccess = true;
						} elseif (($remote_ipaddress[0] == $iprestriction[0]) && ($iprestriction[1] == "*")) {
							$hasAccess = true;
						} elseif (($remote_ipaddress[0] == $iprestriction[0]) && ($remote_ipaddress[1] == $iprestriction[1]) && ($iprestriction[2] == "*")) {
							$hasAccess = true;
						} elseif (($remote_ipaddress[0] == $iprestriction[0]) && ($remote_ipaddress[1] == $iprestriction[1]) && ($remote_ipaddress[2] == $iprestriction[2]) && ($iprestriction[3] == "*")) {
							$hasAccess = true;
						} elseif (($remote_ipaddress[0] == $iprestriction[0]) && ($remote_ipaddress[1] == $iprestriction[1]) && ($remote_ipaddress[2] == $iprestriction[2]) && ($remote_ipaddress[3] == $iprestriction[3])) {
							$hasAccess = true;
						}
					}
				}
					$sql = "UPDATE SMAccount SET faillogin_count = 0, faillogin_datetime = '0000-00-00 00:00:00' WHERE username = $username";
					$dbObj->query($sql);
					return true;
			} 
			
			else {
				$sql = "UPDATE SMAccount SET faillogin_count = faillogin_count + 1, faillogin_datetime = NOW() WHERE username = $username";
				$dbObj->query($sql);
			}
			
		}

		$authmessage = system_showText(LANG_MSG_USERNAME_OR_PASSWORD_INCORRECT);
		return false;

	}

	function sess_registerSMInSession($username) {

		session_start(sess_generateSessIdString());

		if ($_SESSION[SESS_ACCOUNT_ID]) {
			$dbLogoutObj = db_getDBObject();
			$acctObj = db_getFromDB("account", "id", db_formatNumber($_SESSION[SESS_ACCOUNT_ID]));
			$logoutSQL = "INSERT INTO Report_Login (datetime, ip, type, page, username) values (NOW(), ".db_formatString(getenv("REMOTE_ADDR")).", 'logout', ".db_formatString($_SERVER["PHP_SELF"]).", ".db_formatString($acctObj->getString("username")).")";
			$dbLogoutObj->query($logoutSQL);
		}

		unset($_SESSION[SESS_ACCOUNT_ID]);

		session_unset();

		$_SESSION[SM_LOGGEDIN] = "true";
		
		$smacctObj = db_getFromDB("smaccount", "username", db_formatString($username));
		if ($smacctObj->getNumber("id") > 0) {
			
			$_SESSION[SESS_SM_ID] = $smacctObj->getNumber("id");
			$_SESSION[SESS_SM_PERM] = $smacctObj->getString("permission");
			$permission_action = $smacctObj->getPerm("permission_action");
			$_SESSION[SESS_SM_PERM_ACTION] = unserialize($permission_action);
			
			$permission_region = $smacctObj->getPerm("localidades");
			$_SESSION[SESS_SM_LOCALIDADE] = unserialize($permission_region);
			$_SESSION[SESS_SM_TYPE] = $smacctObj->getString("admin_type");
			
		}

		$dbLoginObj = db_getDBObject();
		$loginSQL = "INSERT INTO Report_Login (datetime, ip, type, page, username) values (NOW(), ".db_formatString(getenv("REMOTE_ADDR")).", 'login', ".db_formatString($_SERVER["PHP_SELF"]).", ".db_formatString($username).")";
		$dbLoginObj->query($loginSQL);

	}

	function sess_logoutSM() {

		session_start();

		if ($_SESSION[SM_LOGGEDIN]) {
			$dbLogoutObj = db_getDBObject();
			if ($_SESSION[SESS_SM_ID]) {
				$smacctObj = db_getFromDB("smaccount", "id", db_formatNumber($_SESSION[SESS_SM_ID]));
				$logoutSQL = "INSERT INTO Report_Login (datetime, ip, type, page, username) values (NOW(), ".db_formatString(getenv("REMOTE_ADDR")).", 'logout', ".db_formatString($_SERVER["PHP_SELF"]).", ".db_formatString($smacctObj->getString("username")).")";
			} else {
				setting_get("sitemgr_username", $username);
				$logoutSQL = "INSERT INTO Report_Login (datetime, ip, type, page, username) values (NOW(), ".db_formatString(getenv("REMOTE_ADDR")).", 'logout', ".db_formatString($_SERVER["PHP_SELF"]).", ".db_formatString($username).")";
			}
			$dbLogoutObj->query($logoutSQL);
		}

		session_unset();
		setcookie(session_name(), '', (time () - 2592000), '/', '', 0);
		setcookie("automatic_login", "false", time()+60*60*24*30, "".EDIRECTORY_FOLDER."/gerenciamento");
		session_destroy();
		header("Location: ".SM_LOGIN_PAGE);
		exit;

	}

	function sess_validateSMSession() {

		global $_COOKIE;

		session_start();

		if (!empty($_SESSION[SM_LOGGEDIN]) || ($_COOKIE["automatic_login"] == "true")) {
			if (!empty($_SESSION[SM_LOGGEDIN])) {
				if ($_SESSION[SESS_SM_ID]) {
					
					$smacctObj = db_getFromDB("smaccount", "id", db_formatNumber($_SESSION[SESS_SM_ID]));
					if (!$smacctObj || !$smacctObj->getNumber("id") || ($smacctObj->getNumber("id") <= 0)) 
					{
						sess_logoutSM();
					}
				}
		
			}
			if (($_COOKIE["automatic_login"] == "true") && empty($_SESSION[SM_LOGGEDIN])) sess_registerSMInSession($_COOKIE["username"]);
		} else {
			header("Location: ".SM_LOGIN_PAGE."?destiny=".$_SERVER["PHP_SELF"]."&query=".$_SERVER["QUERY_STRING"]);
			exit;
		}

		if (!DEMO_DEV_MODE && !DEMO_LIVE_MODE) {
			setting_get("sitemgr_first_login", $sitemgr_first_login);
			if ($sitemgr_first_login == "yes") {
				if ((strpos($_SERVER['PHP_SELF'], "/setlogin.php") === false) && (strpos($_SERVER['PHP_SELF'], "/logout.php") === false)) {
					$smusername = "";
					if ($_SESSION[SESS_SM_ID]) {
						$smacctObj = db_getFromDB("smaccount", "id", db_formatNumber($_SESSION[SESS_SM_ID]));
						$smusername = $smacctObj->getString("username");
					}
					if ($smusername != "arcalogin") {
						header("Location: ".DEFAULT_URL."/gerenciamento/setlogin.php?destiny=".$_SERVER["PHP_SELF"]."&query=".$_SERVER["QUERY_STRING"]);
						exit;
					}
				}
			}
		}

	}

	# ----------------------------------------------------------------------------------------------------
	# * COMON
	# ----------------------------------------------------------------------------------------------------

	function sess_generateSessIdString() {
		$sid = time() * rand(1, 10000);
		$sid = md5($sid);
		return $sid;
	}

	function sess_getAccountIdFromSession() {
		return $_SESSION[SESS_ACCOUNT_ID];
	}

	function sess_getSMIdFromSession() {
		return $_SESSION[SESS_SM_ID];
	}

	function sess_isAccountLogged($check_folder = false) {
		if($check_folder){
			if ($_SESSION[SESS_ACCOUNT_ID] && eregi("/membros", $_SERVER["PHP_SELF"])){
				return true;
			} else {
				return false;
			}
		} elseif ($_SESSION[SESS_ACCOUNT_ID]) {
			return true;
		} else {
			return false;
		}
	}

	function sess_isSitemgrLogged($check_folder = false) {
		if($check_folder){
			if ($_SESSION[SM_LOGGEDIN] && eregi("/gerenciamento", $_SERVER["PHP_SELF"])){
				return true;
			} else {
				return false;
			}
		} elseif ($_SESSION[SM_LOGGEDIN]) {
			return true;
		} else {
			return false;
		}
	}

?>
