<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>
<?$APPLICATION->IncludeComponent("divier:banner", ".default", array())?>
    <section class="map">
        <div id="map"></div>
        <div class="map-content">
            <div class="container">
                <div class="map-content-block">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/svg/logo.svg">
                    <div class="map-contacts">
                        <div class="map-contacts-flex">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/svg/address.svg">
                            <p>ул. Земляной Вал, 9, этаж 4, офис 4065 (БЦ Ситидел), Москва, Россия</p>
                        </div>
                        <div class="map-contacts-flex">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/svg/phone2.svg">
                            <a href="tel:+74955043626" class="map-phone">+7 (495) <span>504-36-26</span></a>
                        </div>
                        <div class="map-contacts-flex">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/svg/phone2.svg">
                            <a href="tel:+79662722215" class="map-phone">+7 (966) <span>272-22-15</span></a>
                        </div>
                        <div class="map-contacts-flex">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/svg/email2.svg">
                            <a href="mailto:info@tekscan.ru"><span>info@tekscan.ru</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
    <script type="text/javascript">
        ymaps.ready(function () {
            var myMap = new ymaps.Map('map', {
                    center: [55.761684568962124,37.65852649999999],
                    zoom: 17
                }, {
                    searchControlProvider: 'yandex#search'
                }),
                MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                    '<div style="color: #000000; font-weight: bold;">$[properties.iconContent]</div>'
                ),

                myPlacemark = new ymaps.Placemark([55.761684568962124,37.65852649999999], {
                    hintContent: 'ул. Земляной Вал, 9, этаж 4, офис 4065 (БЦ Ситидел),  Москва, Россия',
                    balloonContent: ''
                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: '/local/templates/divier/images/svg/map.svg',
                    // Размеры метки.
                    iconImageSize: [51, 65],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-5, -38]
                });
            myMap.behaviors.disable('scrollZoom');
            myMap.geoObjects.add(myPlacemark);

        });
    </script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>