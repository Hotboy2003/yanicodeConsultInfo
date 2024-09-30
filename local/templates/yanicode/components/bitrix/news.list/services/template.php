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

<div class="services-cover">
<?php if (!empty($arResult['ITEMS'])): ?>
<?php foreach ($arResult['ITEMS'] as $arItem): ?>
<?php
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
		<div class="services" id="<?=$this->GetEditAreaId($arItem['ID']) ?>">
			<h2 class="services__title">
				<?= $arItem['NAME'] ?? '' ?>
			</h2>
			<div class="services-category">
				<?php
				$words = !empty($arItem['PROPERTIES']['firstArrayOfWords']['VALUE']) ? array_map('trim', explode(',', $arItem['PROPERTIES']['firstArrayOfWords']['VALUE'])) : [];
				foreach ($words as $word):
				?>
				<div class="services__item" data-popup="services-popup"><?= $word ?></div>
				<?php endforeach; ?>
			</div>
			<div class="services-category">
				<?php
				$words = !empty($arItem['PROPERTIES']['secondArrayOfWords']['VALUE']) ? array_map('trim', explode(',', $arItem['PROPERTIES']['secondArrayOfWords']['VALUE'])) : [];
				foreach ($words as $word):
					?>
					<div class="services__item" data-popup="services-popup"><?= $word ?></div>
				<?php endforeach; ?>
			</div>
			<div class="services-category">
				<?php
				$words = !empty($arItem['PROPERTIES']['thirdArrayOfWords']['VALUE']) ? array_map('trim', explode(',', $arItem['PROPERTIES']['thirdArrayOfWords']['VALUE'])) : [];
				foreach ($words as $word):
					?>
					<div class="services__item" data-popup="services-popup"><?= $word ?></div>
				<?php endforeach; ?>
			</div>
		</div>
<?php endforeach; ?>
<?php endif; ?>
</div>