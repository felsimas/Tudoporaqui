<?

	/*==================================================================*\
	######################################################################
	#                                                                    #
	# SisDir Class- System of Class Online 2009           #
	#                                                                    #
	#                #
	#                       #
	#                                                                    #
	# ---------------- 2009 - this file is used in php. ----------------- #
	#                                                                    #
	# http://wxw.google.cn / wxw.msn.cn #
	######################################################################
	\*==================================================================*/

	# ----------------------------------------------------------------------------------------------------
	# * FILE: /body/promotion_index.php
	# ----------------------------------------------------------------------------------------------------

?>

	<div class="sidebar">
		<? include(PROMOTION_EDIRECTORY_ROOT."/join.php"); ?>
		<? include(PROMOTION_EDIRECTORY_ROOT."/quicklist.php"); ?>
		<? include(EDIRECTORY_ROOT."/frontend/googleads.php"); ?>
	</div>

	<div class="mainContent">
		<? include(EDIRECTORY_ROOT."/frontend/breadcrumb.php"); ?>
		<? include(EDIRECTORY_ROOT."/frontend/sitecontent_top.php"); ?>
		<? include(PROMOTION_EDIRECTORY_ROOT."/categories.php"); ?>
		<? include(PROMOTION_EDIRECTORY_ROOT."/featured.php"); ?>
		<? include(EDIRECTORY_ROOT."/frontend/sitecontent_bottom.php"); ?>
	</div>

	<div class="sidebar">
		<div class="baseBannerFeatured"><? include(EDIRECTORY_ROOT."/frontend/banner_featured.php"); ?></div>
		<div class="baseSponsoredLinks"><? include(EDIRECTORY_ROOT."/frontend/banner_sponsoredlinks.php"); ?></div>
	</div>
