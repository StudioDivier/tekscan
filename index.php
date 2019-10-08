<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?><? $APPLICATION->IncludeComponent(
    "divier:banner",
    ".default",
    Array()
); ?>
<? $APPLICATION->IncludeComponent("divier:catalog_on_main", ".default"); ?>
<? global $arFilter;
$arFilter = array(
    "PROPERTY_SHOW_ON_MAIN_VALUE" => "Y"
); ?><? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "show.index",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("NAME", "PROPERTY_PICTURE_ON_MAIN"),
        "FILTER_NAME" => "arFilter",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "1",
        "IBLOCK_TYPE" => "news",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => "",
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
); ?><? $APPLICATION->IncludeComponent(
    "divier:sliders",
    ".default",
    Array()
); ?>
    <section class="map">
        <div id="map">
        </div>
        <div class="map-content">
            <div class="container">
                <div class="map-content-block">
                    <img src="/local/templates/divier/images/svg/logo.svg">
                    <div class="map-contacts">
                        <div class="map-contacts-flex">
                            <img src="/local/templates/divier/images/svg/address.svg">
                            <p>
                                ул. Земляной Вал, 9, этаж 4, офис 4065 (БЦ Ситидел), Москва, Россия
                            </p>
                        </div>
                        <div class="map-contacts-flex">
                            <img src="/local/templates/divier/images/svg/phone2.svg"> <a href="tel:+74955043626"
                                                                                         class="map-phone">+7 (495)
                                504-36-26</a>
                        </div>
                        <div class="map-contacts-flex">
                            <img src="/local/templates/divier/images/svg/phone2.svg"> <a href="tel:+79662722215"
                                                                                         class="map-phone">+7 (966)
                                272-22-15</a>
                        </div>
                        <div class="map-contacts-flex">
                            <img src="/local/templates/divier/images/svg/email2.svg"> <a href="mailto:info@tekscan.ru">info@tekscan.ru</a>
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
                    center: [55.761684568962124, 37.65852649999999],
                    zoom: 17
                }, {
                    searchControlProvider: 'yandex#search'
                }),
                MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                    '<div style="color: #000000; font-weight: bold;">$[properties.iconContent]</div>'
                ),

                myPlacemark = new ymaps.Placemark([55.761684568962124, 37.65852649999999], {
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
    </script><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>