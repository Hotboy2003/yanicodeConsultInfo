<?php
/**
 * @var CMain $APPLICATION
 */
?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID; ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta class="js-meta-viewport" name="viewport" content="width=device-width, height=device-height, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<title>Yanicode :: Главная</title>
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/local/templates/yanicode/assets/template_styles.css">
	<?php $APPLICATION->ShowHead(); ?>
</head>

<body>
<?php $APPLICATION->ShowPanel(); ?>
<header class="header">
	<div class="container">
		<div class="header__burger header__burger_close">
			<span class="burger-line"></span>
			<span class="burger-line"></span>
			<span class="burger-line"></span>
		</div>
		<?php
		$APPLICATION->IncludeComponent(
			"bitrix:menu",
			"topMenu",
			[
				"ALLOW_MULTI_SELECT" => "N",
				"CHILD_MENU_TYPE" => "left",
				"DELAY" => "N",
				"MAX_LEVEL" => "1",
				"MENU_CACHE_GET_VARS" => [],
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_TYPE" => "N",
				"MENU_CACHE_USE_GROUPS" => "N",
				"ROOT_MENU_TYPE" => "top",
				"USE_EXT" => "N",
				"COMPONENT_TEMPLATE" => "topMenu",
			],
			false
		);
		?>
		</div>
</header>