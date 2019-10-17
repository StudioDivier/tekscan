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

<section class="three-col-item silver">
    <div class="container">
        <div class="title-38s mb-45">Новости</div>
        <div class="fixed-swiper-button">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <? foreach ($arResult["ITEMS"] as $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="swiper-slide">
                            <div class="three-col-item__item">
                                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                                    <img src="<?= $arItem["PROPERTY_PICTURE_ON_MAIN_VALUE"] ?>" alt="<?= $arItem["NAME"] ?>">
                                </a>
                                <div class="three-col-item__item-date"><?= $arItem["ACTIVE_FROM"] ?></div>
                                <a href="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" class="three-col-item__item-name"><?= $arItem["NAME"] ?></a>
                                <div class="three-col-item__item-des"><?= substr($arItem["PREVIEW_TEXT"], 0, 200) . '...' ?>
                                </div>
                                <div class="three-col-item__item-link"><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>
