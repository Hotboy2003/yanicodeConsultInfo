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
	<div class="container" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="footer-wrapper">
			<a href="<?=$arItem['PROPERTIES']['linkToMainPage']['VALUE'] ?? '/'?>" class="footer__logo">
				<?php
				$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/local/templates/yanicode/include/logo.php"
					)
				);
				?>
			<div class="footer__feedback">
				<div class="footer__mail">
					<a href="<?=$arItem['PROPERTIES']['linkToMail']['VALUE'] ?? '/'?>"><?=$arItem["NAME"] ?? ''?></a>
				</div>
				<div class="footer__networks">
					<a href="<?=$arItem['PROPERTIES']['linkToFacebook']['VALUE'] ?? '/'?>">
						<?php
						$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => "",
								"PATH" => "/local/templates/yanicode/include/logoFacebook.php"
							)
						);
						?>
					</a>
					<a href="<?=$arItem['PROPERTIES']['linkToInstagram']['VALUE'] ?? '/'?>">
						<?php
						$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => "",
								"PATH" => "/local/templates/yanicode/include/logoInstagram.php"
							)
						);
						?>
					</a>
					<a href="<?=$arItem['PROPERTIES']['linkToYoutube']['VALUE'] ?? '/'?>">
						<?php
						$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => "",
								"PATH" => "/local/templates/yanicode/include/logoYoutube.php"
							)
						);
						?>
					</a>
				</div>
				<div class="footer__phone">
					<a href="<?=$arItem['PROPERTIES']['linkToBlog']['VALUE'] ?? '/'?>"><?=$arItem['PREVIEW_TEXT'] ?? ''?></a>
				</div>
			</div>
			<div class="footer__law">
				<?=$arItem['DETAIL_TEXT'] ?? ''?>
			</div>
		</div>
	</div>
			<?php endforeach; ?>
<?php endif; ?>