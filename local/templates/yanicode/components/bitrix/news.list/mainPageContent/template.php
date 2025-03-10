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
		<div class="blog-list" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<a href="<?= $arItem['PROPERTIES']['LINK']['VALUE'] ?? '' ?>" class="blog">
					<?php if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
					<div class="blog_img">
						<img width="100%" height="100%" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="">
					</div>
					<?php endif; ?>

					<div class="blog__desc">
						<div class="blog__title">
							<?= $arItem['NAME'] ?? '' ?>
						</div>
						<div class="blog__date">
							<?= $arItem['PREVIEW_TEXT'] ?? '' ?>
						</div>
						<div class="blog_article">
							<?= $arItem['PROPERTIES']['TEXT']['VALUE'] ?? '' ?>
						</div>
					</div>
		</a>
		</div>
	<?php endforeach; ?>
<?php endif; ?>