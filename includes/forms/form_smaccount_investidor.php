<?
	# ----------------------------------------------------------------------------------------------------
	# * FILE: /includes/forms/form_smaccount.php
	# ----------------------------------------------------------------------------------------------------
	include("../conf/loadconfig.inc.php");
?>

<? if ($message_smpassword) { ?>
	<p class="errorMessage"><?=$message_smpassword?></p>
<? } ?>

<? if ($message_smaccount) { ?>
	<? if ($success) { ?>
		<div class="response-msg success ui-corner-all"><?=$message_smaccount?></div>
	<?} else {?>
		<p class="errorMessage"><?=$message_smaccount?></p>
	<? } ?>
<? } ?>

<table border="0" cellpadding="2" cellspacing="0" class="standard-table">

	<tr>
		<th colspan="2" class="standard-tabletitle" ><?=system_showText(LANG_SITEMGR_SMACCOUNT_COMERCIAL_ACCOUNTINFORMATION)?></th>
	</tr>

	<tr>
		<th><?=system_showText(LANG_SITEMGR_LABEL_USERNAME)?>:</th>
		<td width="150px">
			<? if ($id) { ?>
				<?=$username?>
				<input type="hidden" name="username" value="<?=$username?>" />
			<? } else { ?>
				<input type="text" name="username" value="<?=$username?>" maxlength="<?=USERNAME_MAX_LEN?>" class="input-form-account" />
				<span><?=system_showText(LANG_SITEMGR_MSG_USERNAME_MUST_BE_BETWEEN)?> <?=USERNAME_MIN_LEN?> <?=system_showText(LANG_SITEMGR_AND)?> <?=USERNAME_MAX_LEN?> <?=system_showText(LANG_SITEMGR_MSG_CHARACTERS_WITH_NO_SPACES)?></span>
			<? } ?>
		</td>
	</tr>

	<tr>
		<? if (eregi("^".EDIRECTORY_FOLDER."/gerenciamento/manageaccount.php", $_SERVER["PHP_SELF"])) { ?>
			<th><?=system_showText(LANG_SITEMGR_LABEL_CURRENTPASSWORD)?>:</th>
			<td>
				<input type="password" autocomplete="off" name="current_password" class="input-form-account" />
				<span><?=system_showText(LANG_SITEMGR_MSG_TYPEYOURPASSWORDIFYOUWANTTOCHANGE)?></span>
			</td>
		<? } ?>
	</tr>

	<tr>
		<th><?=system_showText(LANG_SITEMGR_LABEL_PASSWORD)?>:</th>
		<td>
			<input type="password" autocomplete="off" name="password" maxlength="<?=PASSWORD_MAX_LEN?>" class="input-form-account" onkeyup="checkPasswordStrength(this.value, '<?=EDIRECTORY_FOLDER;?>')" />
			<div class="checkPasswordStrength">
				<span><?=system_showText(LANG_LABEL_PASSWORDSTRENGTH);?>:</span>
				<div id="checkPasswordStrength" class="strengthNoPassword">&nbsp;</div>
			</div>
			<span><?=system_showText(LANG_SITEMGR_MSG_PASSWORD_MUST_BE_BETWEEN)?> <?=PASSWORD_MIN_LEN?> <?=system_showText(LANG_SITEMGR_AND)?> <?=PASSWORD_MAX_LEN?> <?=system_showText(LANG_SITEMGR_MSG_CHARACTERS_WITH_NO_SPACES)?></span>
		</td>
	</tr>

	<tr>
		<th><?=system_showText(LANG_SITEMGR_LABEL_RETYPEPASSWORD)?>:</th>
		<td><input type="password" autocomplete="off" name="retype_password" class="input-form-account" /></td>
	</tr>

</table>

<table border="0" cellpadding="2" cellspacing="0" class="standard-table">

	<tr>
		<th colspan="2" class="standard-tabletitle"><?=system_showText(LANG_SITEMGR_SMACCOUNT_ACCOUNTCONTACTINFORMATION)?></th>
	</tr>

	<tr>
		<th width="150px"><?=system_showText(LANG_SITEMGR_LABEL_NAME)?>:</th>
		<td>
			<input type="text" name="name" value="<?=$name?>" class="input-form-account" />
		</td>
	</tr>

	<tr>
		<th><?=system_showText(LANG_SITEMGR_LABEL_PHONE)?>:</th>
		<td>
			<input type="text" name="phone" value="<?=$phone?>" class="input-form-account" />
		</td>
	</tr>

	<tr>
		<th><?=system_showText(LANG_SITEMGR_LABEL_EMAIL)?>:</th>
		<td>
			<input type="text" name="email" value="<?=$email?>" class="input-form-account" />
		</td>
	</tr>
	
</table>
