<?

	if (PAYFLOWPAYMENT_FEATURE == "on") {
		if (REALTRANSACTION == "on") {
			$payflow_login = "";
			$payflow_partner = "";
			$dbObjPayment = db_getDBObject();
			$sql = "SELECT * FROM Setting_Payment WHERE name LIKE 'PAYFLOW_%'";
			$result = $dbObjPayment->query($sql);
			while ($row = mysql_fetch_assoc($result)) {
				if ($row["name"] == "PAYFLOW_LOGIN") $payflow_login = crypt_decrypt($row["value"]);
				if ($row["name"] == "PAYFLOW_PARTNER") $payflow_partner = crypt_decrypt($row["value"]);
			}
			unset($dbObjPayment);
			define(PAYFLOW_LOGIN, $payflow_login);
			define(PAYFLOW_PARTNER, $payflow_partner);
		} else {
			define(PAYFLOW_LOGIN, "login");
			define(PAYFLOW_PARTNER, "paypal");
		}
		define(PAYFLOW_POST_URL, "https://payflowlink.paypal.com");
		define(PAYFLOW_CURRENCY, PAYMENT_CURRENCY);
	}

?>
