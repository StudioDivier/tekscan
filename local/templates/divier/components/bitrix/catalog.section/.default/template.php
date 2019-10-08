<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |    Attention!
 * |    The following comments are for system use
 * |    and are required for the component to work correctly in ajax mode:
 * |    <!-- items-container -->
 * |    <!-- pagination-container -->
 * |    <!-- component-end -->
 */

$this->setFrameMode(true);
?>
<div class="system-items">
    <? foreach ($arResult["ITEMS"] as $item): ?>
        <div class="system-item">
            <div class="system-item-block">
                <div class="system-item-block-image">
                    <img src="<?= $item["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $item["NAME"] ?>">
                </div>
                <div class="system-item-block-text">
                    <div class="system-item-block-text-title">
                        <?= $item["NAME"] ?>
                    </div>
                    <div class="text-18Light">
                        <?= $item["PREVIEW_TEXT"] ?>
                    </div>
                </div>
                <div class="system-item-block-button noselect system-item-block-button-click">
                    <img src="<?= $templateFolder ?>/images/white-down-up.png" alt="Подробнее">
                </div>
            </div>
            <div class="system-item-dropdown d-none">
                <?= $item["DETAIL_TEXT"] ?>
                <div class="system-slider mb-63">
                    <div class="system-slider-block">
                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">

                                <? foreach ($item["PROPERTIES"]["SLIDES"]["VALUE"] as $value): ?>
                                    <div class="swiper-slide" data-index="<?= $i ?>"><img
                                                src="<?= $value["PREVIEW_PICTURE"] ?>">
                                    </div>

                                <? endforeach; ?>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="system-slider mb-35">
                    <div class="system-slider-block">
                        <div class="swiper-container gallery-top system-slider-1-1">
                            <div class="swiper-wrapper">
                                <? foreach ($item["PROPERTIES"]["SLIDES"]["VALUE"] as $value): ?>
                                    <div class="swiper-slide">
                                        <div class="text-18Light mb-60"><b><?= $value["NAME"] ?></b></div>
                                        <div class="swiper-slider-flex">

                                            <div class="slider-char-img">
                                                <img src="<?= $value["DETAIL_PICTURE"] ?>" alt="<?= $value["NAME"] ?>">
                                            </div>
                                            <div class="slider-char-text">
                                                <?= $value["DETAIL_TEXT"] ?>
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
                <? if ($item["PROPERTIES"]["DOWNLOAD_FILE"]["VALUE"]): ?>
                    <div class="red-download"><a href="<?= $item["PROPERTIES"]["DOWNLOAD_FILE"]["VALUE"] ?>">Скачать
                            остальные применения данной системы <img src="<?= $templateFolder ?>/images/red-download.png"
                                                                     alt="Скачать остальные применения данной системы">
                        </a>
                    </div>
                <? endif ?>
                <div class="blue-button-dropdown system-item-block-button-click"><a href="javascript:void(0)">Свернуть
                        описание <img src="<?= $templateFolder ?>/images/blue-arrow-up.png" alt="Свернуть описание"></a>
                </div>
            </div>
        </div>
    <? endforeach; ?>
</div>