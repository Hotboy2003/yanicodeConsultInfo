<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
		<section id="<?=$this->GetEditAreaId($arItem['ID']) ?>" class="banner banner_before54" style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC']?>');">
			<div class="banner-wrapper">
				<div class="container">
					<div class="banner__content">
						<p><?= $arItem['PREVIEW_TEXT'] ?? '' ?></p>
						<p><b class="text_gold"><?= $arItem['DETAIL_TEXT'] ?? '' ?></b></p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="stages">
					<?php
					$words = !empty($arItem['PROPERTIES']['WORDSARRAY']['VALUE']) ? array_map('trim', explode(',', $arItem['PROPERTIES']['WORDSARRAY']['VALUE'])) : [];
					?>
					<?php $count = 0; foreach ($words as $word): ?>
						<div class="stages__item">
							<div class="stages__step"><?= '0' . $count ?></div>
							<div class="stages__desc-step"><?= $word ?></div>
						</div>
						<?php $count++; ?>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
	<?php endforeach; ?>
<?php endif; ?>