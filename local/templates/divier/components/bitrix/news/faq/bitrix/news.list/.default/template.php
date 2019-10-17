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
<div class="FAQ-items">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <div class="FAQ-item">
            <div class="FAQ-item-title box-s noselect"><p><?= $arItem["NAME"] ?></p></div>
            <div class="FAQ-item-toggle-block d-none">
                <?= $arItem["PREVIEW_TEXT"] ?>
                <div class="FAQ-tb-select">
                    <? foreach ($arItem["PROPERTIES"]["FAQ_MORE"]["VALUE"] as &$faq_more): ?>
                        <div class="FAQ-tb-select-item box-s">
                            <div class="select-item">
                                <p><?= $faq_more["NAME"] ?></p>
                                <img src="<?= $faq_more["PREVIEW_PICTURE"] ?>" alt="<?= $faq_more["NAME"] ?>">
                            </div>
                            <div class="FAQ-item-toggle-block-more d-none">
                                <?= $faq_more["PREVIEW_TEXT"] ?>
                            </div>
                        </div>
                    <? endforeach; ?>
                </div>
                <p class="FAQ-tb-link"><a href="#<?= $arItem["CODE"] ?>">Ссылка на этот FAQ</a></p>
            </div>
        </div>
    <? endforeach; ?>
</div>