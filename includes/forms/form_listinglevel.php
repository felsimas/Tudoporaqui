<?
	$levelObj = new ListingLevel();
	$levelValue = $levelObj->getValues();
	unset($strArray);
	foreach ($levelValue as $value) {
		$strAux = "<tr><th>".$levelObj->showLevel($value).":</th><td><strong>";
		if ($levelObj->getPrice($value) > 0) $strAux .= $levelObj->getPrice($value);
		else $strAux .= system_showText(LANG_LABEL_FREE);
		$strAux .= "</strong>";
		$strAux .= " ".system_showText(LANG_PER)." ";
		if (payment_getRenewalCycle("listing") > 1) {
			$strAux .= payment_getRenewalCycle("listing")." ";
			$strAux .= payment_getRenewalUnitName("listing")."s";
		}else {
			$strAux .= payment_getRenewalUnitName("listing");
		}
		$strAux .= "</td></tr>";
		$strArray[] = $strAux;
	}

?>

<table border="0" cellpadding="0" cellspacing="0" class="standard-table">

	<tr>
		<th class="standard-tabletitle"><?=system_showText(LANG_MENU_SELECTLISTINGLEVEL)?></th>
	</tr>

	<!-- <tr>
			<th class="tableOption" colspan="2"><a href="<?=NON_SECURE_URL?>/advertise.php" target="_blank" class="listingOption"><?=system_showText(LANG_LISTING_OPTIONS);?></a></th>
	</tr> -->
                                                                                                                       
	<tr>
		<? if ((!$listing) || (($listing) && ($listing->needToCheckOut())) || (strpos($url_base, "/sitemgr")) || ($claimlistingid) || (($listing) && ($listing->getPrice() <= 0))) { ?>

			<td>
				<table border="0" cellpadding="2" cellspacing="2" class="standard-table">
					<?
                    $levelvalues = $levelObj->getLevelValues();
					foreach ($levelvalues as $levelvalue) {
						?>
						<tr>
                  
                            <td style="width: auto; vertical-align: top">
                               <input type="radio" <? if ($levelvalue== "80") echo "disabled='true'" ?> name="level" onclick="for (var i=0; i < form.asstipo.length; i++) {if(form.asstipo[i].checked) {form.asstipo[i].checked = false; } } for (var i=0; i < form.assvenc.length; i++) {if(form.assvenc[i].checked) {form.assvenc[i].checked = false; } }" value="<?=$levelvalue?>" <? if ($levelArray[$levelObj->getLevel($levelvalue)]) echo "checked"; ?> style="width: 10px;" />
                            </td> 
                           	<td style="width: auto; vertical-align: top" >
                            <? 
                            if ($levelvalue== "10") echo "<b>Gratuito</b>";
                            if ($levelvalue== "30") echo "<b>Utilidade&nbsp;P�blica</b>" ;
                            if ($levelvalue== "70") echo "<b>Assinantes</b>" ;
                            if ($levelvalue== "80") echo "<b>Destaque</b>" ;
                            ?>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>      	                           
                            <td style="width: auto; vertical-align: top"><?
                            if ($levelvalue== "10") echo "Neste n�vel todos os estabelecimento podem cadastrar seus dados b�sicos, tais como � Nome de Fantasia, Raz�o Social, CNPJ ou CPF, Endere�o f�sico, Endere�o na internet (www) e e-mail e se inscrever em uma Categoria."; 
                            if ($levelvalue== "30") echo "Neste n�vel cadastram-se os estabelecimento p�blicos(ligados a administra��o p�blica Federal, Estadual, Municipal) e os de Utilidade P�blica. "; 
                            if ($levelvalue== "70") echo "Neste n�vel os estabelecimentos contam com acesso a �rea administrativa do seu espa�o e a partir dela gerenciar (inserir, alterar, excluir) todo o conte�do e usufruir todos os benef�cios de assinante, e se inscrever em at� 3 Categorias.";
                            if ($levelvalue== "80") echo "N�vel ainda n�o dispon�vel comercialmente."; 
                            ?><br /></td>
                    	</tr>
						<?
					}
					?>
				</table>
			</td>

		<? } else { ?>

			<td>
				<table border="0" cellpadding="0" cellspacing="0" class="standardChooseLevel">
					<? if (LISTINGTEMPLATE_FEATURE == "on") { ?>
						<tr>
							<th><?=system_showText(LANG_LISTING_TEMPLATE)?>:</th>
							<td>
								<?
								$listingtemplate = new ListingTemplate($listing->getNumber("listingtemplate_id"));
								if (($listingtemplate) && ($listingtemplate->getNumber("id") > 0)) {
									echo $listingtemplate->getString("title");
								} else {
									echo system_showText(LANG_LABEL_DEFAULT);
								}
								if ($listingtemplate->getString("price") > 0) echo " (+".CURRENCY_SYMBOL.$listingtemplate->getString("price").")";
								else echo " (".system_showText(LANG_LABEL_FREE).")";
								?>
								<input type="hidden" name="listingtemplate_id" value="<?=$listingtemplate_id?>" />
							</td>
						</tr>
					<? } ?>
					<tr>
						<th><?=system_showText(LANG_LISTING_LEVEL);?>:</th>
						<td>
							<?=ucwords($levelObj->getLevel($level));?>
							<input type="hidden" name="level" value="<?=$level?>" />
						</td>
					</tr>
				</table>
			</td>

		<? } ?>

	</tr>

</table>