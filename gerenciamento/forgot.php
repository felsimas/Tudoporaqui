<?

	# ----------------------------------------------------------------------------------------------------
	# * FILE: /gerenciamento/login.php
	# ----------------------------------------------------------------------------------------------------

	# ----------------------------------------------------------------------------------------------------
	# LOAD CONFIG
	# ----------------------------------------------------------------------------------------------------
	include("../conf/loadconfig.inc.php");

	# ----------------------------------------------------------------------------------------------------
	# AUX
	# ----------------------------------------------------------------------------------------------------
	$section = "sitemgr";
	include(INCLUDES_DIR."/code/forgot_password.php");

	# ----------------------------------------------------------------------------------------------------
	# HEADER
	# ----------------------------------------------------------------------------------------------------
	include(SM_EDIRECTORY_ROOT."/layout/header_login.php");

?>

<div id="wrapper">
       <div id="container_front" class="login">
       
           <div id="header_front">
           		<a href="<? echo DEFAULT_URL;?>"><img src="<? echo DEFAULT_URL;?>/images/logo_login.png" border="0" alt="Tudo por aqui logo" /></a>
           

           </div>

			<form name="forgotpassword" method="post">
				<? include(INCLUDES_DIR."/forms/form_forgot_password.php"); ?>
			</form>




           </div>
		</div>



<?
	# ----------------------------------------------------------------------------------------------------
	# FOOTER
	# ----------------------------------------------------------------------------------------------------
//	include(SM_EDIRECTORY_ROOT."/layout/footer.php");
?>
