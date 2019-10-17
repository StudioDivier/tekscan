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


<section class="news-search">
    <div class="container">
        <div class="title-38s mb-45"><?= $APPLICATION->GetTitle() ?></div>
        <div class="news-search-items">
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="news-search-item">
                    <div class="news-search-item__img">
                        <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>">
                    </div>
                    <div class="news-search-item__text">
                        <div class="news-search-item__date"><?= $arItem["ACTIVE_FROM"] ?></div>
                        <div class="news-search-item__name"><?= $arItem["NAME"] ?></div>
                        <div class="news-search-item__des text-18Light"><?= substr($arItem["PREVIEW_TEXT"], 0, 308) . '...' ?></div>
                        <div class="news-search-item__button"><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">Подробнее<img
                                        src="<?= $templateFolder ?>/images/blue-arrow-right.png"> </a></div>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
        <?= $arResult["NAV_STRING"] ?>
    </div>
</section>
