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
$this->setFrameMode(true); ?>

<div class="services-items">
    <? foreach ($arResult["SECTIONS"] as $section): ?>
        <div class="services-item">
            <div class="services-item-img"><img src="<?= $section["PICTURE"]["SRC"] ?>"
                                                alt="<?= $section["NAME"] ?>"></div>
            <a class="services-item-link" href="<?= $section["SECTION_PAGE_URL"] ?>"><?= $section["NAME"] ?></a>
        </div>
    <? endforeach; ?>
</div>