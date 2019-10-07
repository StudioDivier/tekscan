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

$this->addExternalCss(SITE_TEMPLATE_PATH . "/css/swiper/swiper.css");
$this->addExternalJS(SITE_TEMPLATE_PATH . "/js/swiper/swiper.min.js");
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
                        <div class="swiper-container gallery-thumbs system-slider-1">
                            <div class="swiper-wrapper">
                                <?foreach ($item["PROPERTIES"]["SLIDES"]["VALUE"] as $value):?>
                                    <div class="swiper-slide"><img src="<?=$value["PREVIEW_PICTURE"]?>"></div>
                                <?endforeach;?>
                                <?foreach ($item["PROPERTIES"]["SLIDES"]["VALUE"] as $value):?>
                                    <div class="swiper-slide"><img src="<?=$value["PREVIEW_PICTURE"]?>"></div>
                                <?endforeach;?>
                                <?foreach ($item["PROPERTIES"]["SLIDES"]["VALUE"] as $value):?>
                                    <div class="swiper-slide"><img src="<?=$value["PREVIEW_PICTURE"]?>"></div>
                                <?endforeach;?>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="text-18Light mb-60"><b>Электронная сборка: выбор и размещение</b></div>
                <div class="system-slider mb-35">
                    <div class="system-slider-block">
                        <div class="swiper-container system-slider-1 system-slider-1-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="swiper-slider-flex">
                                        <div class="slider-char-img">
                                            <img src="../images/jpg/system-slider-1-1.jpg">
                                        </div>
                                        <div class="slider-char-text">
                                            <div class="text-18Light mb-25"><b>Проблема:</b></div>
                                            <div class="text-18Light mb-35">Чтобы получить четкие, проверяемые данные о
                                                том, как роботизированная производственная система выполняет очень
                                                специфические движения.
                                            </div>
                                            <ul class="red-dot text-18Light mb-40">
                                                <li class="text-18Light">Фиксация изменений выравнивания давления в
                                                    производственном процессе
                                                </li>
                                                <li class="text-18Light">Снижение рисков, которые могут привести к
                                                    дефектам и повлиять на урожайность
                                                </li>
                                            </ul>
                                            <div class="text-18Light mb-25"><b>Решение::</b></div>
                                            <div class="text-18Light mb-35">Система I-Scan, используемая в процессе
                                                настройки системы, была использована для проверки правильности
                                                сопряжения всех роботизированных элементов.
                                            </div>
                                            <ul class="red-dot text-18Light">
                                                <li class="text-18Light">Фиксация изменений выравнивания давления в
                                                    производственном процессе
                                                </li>
                                                <li class="text-18Light">Снижение рисков, которые могут привести к
                                                    дефектам и повлиять на урожайность
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    <? endforeach; ?>
</div>