<?



	# ----------------------------------------------------------------------------------------------------
	# * FILE: /classified/detailview.php
	# ----------------------------------------------------------------------------------------------------

	# ----------------------------------------------------------------------------------------------------
	# AUX
	# ----------------------------------------------------------------------------------------------------
	require(EDIRECTORY_ROOT."/frontend/checkregbin.php");

	# ----------------------------------------------------------------------------------------------------
	# CODE
	# ----------------------------------------------------------------------------------------------------

	if (!$classifiedMsg) {
		$user = true;
		include(INCLUDES_DIR."/views/view_classified_detail_".$classified->getNumber("level").".php");
	} else {
		echo "<p class=\"errorMessage\">".$classifiedMsg."</p>";
	}

?>
