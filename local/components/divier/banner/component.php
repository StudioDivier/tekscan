<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(CModule::IncludeModule("iblock")) {
    $arResult = array();
    $arSelect = Array("DETAIL_PICTURE", "PROPERTY_TITLE", "PROPERTY_DESC");
    $arFilter = Array("IBLOCK_ID" => "3", "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");

    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize" => 50), $arSelect);
    while ($ob = $res->GetNextElement()) {
        $arResult[] = $ob->GetFields();
    }

    foreach ($arResult as &$item) {
        $item["DETAIL_PICTURE"] = CFile::GetPath($item["DETAIL_PICTURE"]);
    }
}


$this->IncludeComponentTemplate();