<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */
//foreach ($arResult["ITEMS"] as &$item) {
//    $arSelect = Array("ID", "NAME", "PREVIEW_PICTURE", "DETAIL_PICTURE", "DETAIL_TEXT");
//    foreach ($item["PROPERTIES"]["SLIDES"]["VALUE"] as &$slide) {
//        $arFilter = Array("IBLOCK_ID" => "6", "ID" => $slide);
//        $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize" => 50), $arSelect);
//        while ($ob = $res->GetNextElement()) {
//            $arFields = $ob->GetFields();
//        }
//        $arFields["PREVIEW_PICTURE"] = CFile::GetPath($arFields["PREVIEW_PICTURE"]);
//        $arFields["DETAIL_PICTURE"] = CFile::GetPath($arFields["DETAIL_PICTURE"]);
//        $slide = array();
//        $slide = $arFields;
//    }
//    if ($item["PROPERTIES"]["DOWNLOAD_FILE"]["VALUE"])
//        $item["PROPERTIES"]["DOWNLOAD_FILE"]["VALUE"] = CFile::GetPath($item["PROPERTIES"]["DOWNLOAD_FILE"]["VALUE"]);
//}
//$component = $this->getComponent();
////$arParams = $component->applyTemplateModifications();
//$this->addExternalCss(SITE_TEMPLATE_PATH . "/css/swiper/swiper.css");
//$this->addExternalJS(SITE_TEMPLATE_PATH . "/js/swiper/swiper.min.js");