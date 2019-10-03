<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <!--	<meta http-equiv="X-UA-Compatible" content="IE=edge" />-->
    <title><? $APPLICATION->ShowTitle() ?></title>
    <!--	<link rel="shortcut icon" type="image/x-icon" href="--><? //=SITE_TEMPLATE_PATH?><!--/favicon.ico" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/common.css"/>
    <? $APPLICATION->ShowHead(); ?>
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<header>
    <div class="container">
        <div class="header-wrapper ">
            <div class="header-logo">
                <a href="<?= SITE_DIR ?>">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/svg/logo.svg" alt="Техскан">
                </a>
            </div>
            <div class="tagline">
                <p><b>Готовые решения</b> в области</p>
                <p>промышленной индустрии</p>
            </div>
            <? $APPLICATION->IncludeComponent("bitrix:search.form", "divier", array(
                "PAGE" => "#SITE_DIR#search/index.php"
            ),
                false
            ); ?>
            <!--                <input placeholder="Поиск" class="">-->
            <!--                <button type="submit"><img src="--><? //?><!--images/search.svg"> </button>-->
            <div class="mail-phone">
                <a href="tel:+74955043626"><img src="<?= SITE_TEMPLATE_PATH ?>/images/svg/phone.svg"> +7 (495) <b>504-36-26</b></a>
                <a href="mailto:info@tekscan.com"><img src="<?= SITE_TEMPLATE_PATH ?>/images/svg/email.svg">
                    info@tekscan.com</a>
            </div>
        </div>
    </div>
    <? $APPLICATION->IncludeComponent(
	"bitrix:menu",
	"top",
	array(
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "topsecond",
		"USE_EXT" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "top",
		"DELAY" => "N"
	),
	false
); ?>
</header>