<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<section class="news-card mb-110">
    <div class="container">
        <div class="news-card-date"><?= $arResult["ACTIVE_FROM"] ?></div>
        <div class="title"><?= $arResult["NAME"] ?></div>
        <div class="text"><?= $arResult["DETAIL_TEXT"] ?></div>
    </div>
</section>