<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!empty($arResult)):?>
    <section class="three-col-item blue">
        <div class="container">
            <div class="title-38s mb-45 color-w">Портфолио</div>
            <div class="fixed-swiper-button">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <? foreach ($arResult as $img): ?>
                            <div class="swiper-slide">
                                <img src="<?= $img['PROPERTY_IMAGES_VALUE'] ?>">
                            </div>
                        <? endforeach; ?>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
    </section>
<? endif; ?>
<? $this->addExternalCss(SITE_TEMPLATE_PATH . "/css/swiper/swiper.min.css"); ?>
<? $this->addExternalJS(SITE_TEMPLATE_PATH . "/js/swiper/swiper.min.js"); ?>
