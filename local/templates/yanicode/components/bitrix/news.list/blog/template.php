<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult['ITEMS'])): ?>
<?php foreach ($arResult['ITEMS'] as $arItem): ?>
<?php
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
	<div id="<?=$this->GetEditAreaId($arItem['ID']) ?>">
		<h1>
			<?= $arItem['NAME'] ?? '' ?>
		</h1>
		<p>
			<?= $arItem['PROPERTIES']['firstParagraph']['VALUE'] ?? '' ?>
		</p>
		<p>
			<?= $arItem['PROPERTIES']['secondParagraph']['VALUE'] ?? '' ?>
		</p>
	</div>
<?php endforeach; ?>
<?php endif; ?>