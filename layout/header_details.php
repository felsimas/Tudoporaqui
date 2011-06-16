<?php

	header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", FALSE);
	header("Pragma: no-cache");
	header("Content-Type: text/html; charset=iso-8859-1",TRUE);
	session_start();

	include(INCLUDES_DIR."/code/headertag.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
	<head>
		<link rel="shortcut icon" href="<?=DEFAULT_URL?>/images/favicon.ico">
		<meta name="description" content="<?php echo $headertag_description?>" />
		<meta name='keywords' content='<?php echo $headertag_keywords?>' />
		<link rel="shortcut icon" href="tpa_layout/tpa_imgs/favicon.ico">
		<title><?php echo $headertag_title?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="Content-Language" content="pt-br" />
		<meta name="ROBOTS" content="index, follow" />

		<link href="<?=DEFAULT_URL?>/layout/tpa_geral.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?=DEFAULT_URL?>/layout/general_structure.css" rel="stylesheet" type="text/css" media="all" />
		<?=system_getNoImageStyle($cssfile = true);?>


		<?

		if ($extrastyle) {
			if (is_array($extrastyle)) {
				foreach ($extrastyle as $extra_style) {
					echo "<link href=\"".$extra_style."\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />\n";
				}
			} else {
				echo "<link href=\"".$extrastyle."\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />\n";
			}
		}
		?>

		<? // SPECIFIC STYLESHEET TO MAC OS AND SAFARI BROWSER - FIX BUG WITH THE NAVBAR AND BUTTON
		if ((strpos($_SERVER['HTTP_USER_AGENT'], "Mac") !== false) or (strpos($_SERVER['HTTP_USER_AGENT'], "Safari") !== false)) echo "<link href=\"".DEFAULT_URL."/layout/general_macfix.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />\n"; ?>

		<? // SPECIFIC STYLESHEET TO LINUX OS - FIX BUG WITH THE NAVBAR
		if (strpos($_SERVER['HTTP_USER_AGENT'], "Linux") !== false) echo "<link href=\"".DEFAULT_URL."/layout/general_linuxfix.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />\n"; ?>


		<? /* EDIRECTORY JAVASCRIPT */?>
		<script type="text/javascript">
			<!--
			DEFAULT_URL = "<?=DEFAULT_URL?>";
			-->
		</script>
	  	<script src="<?=DEFAULT_URL?>/scripts/swfobject.js" type="text/javascript"></script>
      	<script src="<?=DEFAULT_URL?>/scripts/expandingbanner.js" type="text/javascript"></script>
		<script src="<?=DEFAULT_URL?>/scripts/lang.js.php" language="javascript" type="text/javascript"></script>
		<script src="<?=DEFAULT_URL?>/scripts/common.js" language="javascript" type="text/javascript"></script>
		<script src="<?=DEFAULT_URL?>/scripts/location.js" language="javascript" type="text/javascript"></script>
		<script src="<?=DEFAULT_URL?>/scripts/contactclick.js" language="javascript" type="text/javascript"></script>
		<script src="<?=DEFAULT_URL?>/scripts/cookies.js" language="javascript" type="text/javascript"></script>
		<script src="<?=DEFAULT_URL?>/scripts/jquery.js" language="javascript" type="text/javascript"></script>
        <script src="<?=DEFAULT_URL?>/scripts/jquery.cookie.js" type="text/javascript"></script>
		<script src="<?=DEFAULT_URL?>/scripts/jquery.autocomplete.js" type="text/javascript"></script>
		<link href="<?=DEFAULT_URL?>/scripts/jquery.autocomplete.css" rel="stylesheet" type="text/css" media="all" />
		<script src="<?=DEFAULT_URL?>/scripts/jquery.form.js" type="text/javascript"></script>
		<script src="<?=DEFAULT_URL?>/scripts/jquery.thickbox.js" type="text/javascript"></script>
		<link href="<?=DEFAULT_URL?>/scripts/thickbox.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="<?=DEFAULT_URL?>/scripts/jquery.selectbox.js"></script>
		<script src="<?=DEFAULT_URL?>/scripts/review.js" language="javascript" type="text/javascript"></script>
		<link type="text/css" href="<?=DEFAULT_URL?>/scripts/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
        <script type="text/javascript" src="<?=DEFAULT_URL?>/scripts/jquery-ui-1.7.2.custom.min.js"></script>


	<script type="text/javascript">
var strmain='Este <b>n�o</b> � mais um indexador. �, antes de mais nada uma forma de tornar a internet mais democr�tica. Aqui voc� vai encontrar empresas, profissionais e estabelecimentos de utilidade p�blica que produzem, comercializam ou prestam o servi�o que voc� precisa. Esperamos que encontre. Para mais informa��es clique <a href="http://www.tudoporaqui.com.br/listing/detail.php?id=52195"><b>AQUI</b></a>';
var strestabelecimento = 'A partir desta p�gina voc� pode buscar a informa��o desejada. Sua busca pode ser refinada atrav�s da sele��o do Estado, Munic�pio e Bairro e em seguida digitar a palavra ou nome do estabelecimento, produto ou servi�o buscado naquele local. N�o existindo sele��o e clicando em BUSCAR o sistema mostrar� uma listagem geral de estabelecimentos existentes em nossa base de dados.';
var quemfaz = 'Produto criado e desenvolvido a partir de junho de 2009, pela <b>SLG Marketing e Servi�os de Inform�tica Ltda.</b>, de Joinville, Santa Catarina que aliou seus conhecimentos e experi�ncias de marketing para democratizar a internet. ';
var politica ='Clique para conhecer a nossa Pol�tica de Conte�do';
</script>
<!--[if IE 6]>
	<style>
	#recados {
	float: left;
	width: 410px;
	position: relative;
	height: auto;
    margin-left: 0px;
	left: 240px;
	color: #022e56;
	margin-top: 20px;

	}
    </style>
<![endif]-->


	</head>

	<body>

    	<?

		if ((strpos($_SERVER["PHP_SELF"], "/".LISTING_FEATURE_NAME) !== false) || (strpos($_SERVER["PHP_SELF"], "claim.php") !== false)) { ?>
		<span class="isHidden" id="defaultURL"><?=DEFAULT_URL?></span>
		<? } ?>

	<div id="gerald">
    	<div id="login" style="font-size:94%; line-height:1; font-family:Arial,Verdan,Sans-Serif;">

			<? if (!sess_getAccountIdFromSession())
			 { ?>

			<a href="<?=DEFAULT_URL?>/registro">Registro</a>
			| <a id="" class="thickbox" href="<?=DEFAULT_URL?>/frontend/login.php?keepThis=true&height=270&width=400">
			Login
			 </a>

			 <? } else { ?>


			<a href="<?=DEFAULT_URL?>/membros">
				Minha Conta</a> | <a href="<?=DEFAULT_URL?>/membros/logout.php">
				<?=system_showText(LANG_BUTTON_LOGOUT)?></a>

			<? } ?>

		</div>

	<div id='buscaint'>
		<div id='logop'>
			<a href="<?=DEFAULT_URL?>/index.php" title="Tudo Por Aqui">
				<img src='<?=DEFAULT_URL?>/images/logop.png' border='0' alt="Tudo Por Aqui"/>
			</a>
		</div>

<?  include(EDIRECTORY_ROOT."/search_no_results.php"); ?>
</div>

			<div id="domChunk"></div>
			
			
			<div id="fb-root"></div>

			<script>
			  window.fbAsyncInit = function() {
			    FB.init({appId: '151047404923101', status: true, cookie: true,
			             xfbml: true});
			  };
			  (function() {
			    var e = document.createElement('script'); e.async = true;
			    e.src = document.location.protocol +
			      '//connect.facebook.net/pt_BR/all.js';
			    document.getElementById('fb-root').appendChild(e);
			  }());
			</script>