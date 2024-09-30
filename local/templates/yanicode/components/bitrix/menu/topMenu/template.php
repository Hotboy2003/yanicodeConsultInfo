<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if(!empty($arResult)): ?>
	<div class="header-wrapper">
		<a href="/" class="header__logo">
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
		</a>
	<div class="header-nav">
		<nav class="nav-list">
		<?php foreach ($arResult as $item): ?>
			<a class="nav-list__item" href="<?= $item['LINK']?>"><?= $item['TEXT']?></a>
		<?php endforeach; ?>
		</nav>
	</div>
</div>
<?php endif; ?>