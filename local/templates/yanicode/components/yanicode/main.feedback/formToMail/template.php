<?php
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<div class="mfeedback">
<?php if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if($arResult["OK_MESSAGE"] <> '')
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?php
}
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="js-validated-form">
<?=bitrix_sessid_post()?>
	<div class="popup-feedback__input-cover">
		<div class="popup-feedback__input-label">
			<?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?php endif?>
		</div>
		<input class="popup-feedback__input js-validated-field" type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
	</div>

	<div class="popup-feedback__double-column">
		<div class="popup-feedback__input-cover">
			<div class="popup-feedback__input-label">
				<?=GetMessage("MFT_PHONE")?><?php if(empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?php endif?>
			</div>
			<input class="popup-feedback__input mask-phone-js js-validated-field" type="text" name="phone" value="<?=$arResult["AUTHOR_PHONE"]?>">
		</div>

		<div class="popup-feedback__input-cover">
			<div class="popup-feedback__input-label">
				<?=GetMessage("MFT_EMAIL")?><?php if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?php endif?>
			</div>
			<input class="popup-feedback__input js-validated-field" type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
		</div>
	</div>

	<div class="popup-feedback__input-cover">
		<div class="popup-feedback__input-label">
			<?=GetMessage("MFT_COMPANYNAME")?><?php if(empty($arParams["REQUIRED_FIELDS"]) || in_array("COMPANYNAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?php endif?>
		</div>
		<input class="popup-feedback__input" type="text" name="company_name" value="<?=$arResult["COMPANY_NAME"]?>">
	</div>

	<div class="popup-feedback__input-cover">
		<div class="popup-feedback__input-label">
			<?=GetMessage("MFT_MESSAGE")?><?php if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?php endif?>
		</div>
		<textarea class="popup-feedback__textarea" name="MESSAGE" rows="5" cols="40"><?=$arResult["MESSAGE"]?></textarea>
	</div>

	<?php if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="">
	</div>
	<?php endif;?>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">

	<div class="popup-feedback__button-cover">
		<input class="button button_modal-gold js-button-submit" type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
	</div>
</form>
</div>