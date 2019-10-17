<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!empty($arResult)):?>
    <section class="main-banner-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <? foreach ($arResult as $item): ?>
                    <div class="swiper-slide" style="background-image: url('<?= $item["DETAIL_PICTURE"] ?>')">
                        <div class="main-slider-content">
                            <div class="container">
                                <div class="main-slider-content__title">Контрольно-измерительное и испытательное
                                    оборудование
                                </div>
                                <div class="main-slider-content__des">Измерение удельного давления и компьютерный анализ
                                    его
                                    распределения между любыми сопряженными объектами
                                </div>
                            </div>
                        </div>
                    </div>
                <? endforeach ?>
            </div>
            <div class="container swiper-buttons-main-slider">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
    </section>
<? endif; ?>