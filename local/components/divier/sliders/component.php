<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(CModule::IncludeModule("iblock")) {
    $arResult = array();
    $arSelect = Array("PROPERTY_IMAGES");
    $arFilter = Array("IBLOCK_ID" => "4", "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");

    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
    while ($ob = $res->GetNextElement()) {
        $arResult[] = $ob->GetFields();
    }

    foreach ($arResult as &$item) {
        $item["PROPERTY_IMAGES_VALUE"] = CFile::GetPath($item["PROPERTY_IMAGES_VALUE"]);
    }
}


$this->IncludeComponentTemplate();