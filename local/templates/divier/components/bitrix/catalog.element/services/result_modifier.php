<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult["PROPERTIES"]["MORE_EQUIPMENT"]["VALUE"] as &$equipment) {
    $arSelect = Array("ID", "NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT");
    $arFilter = Array("IBLOCK_ID" => "8", "ID" => $equipment);
    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
    while ($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
    }
    $arFields["PREVIEW_PICTURE"] = CFile::GetPath($arFields["PREVIEW_PICTURE"]);
    $equipment = array();
    $equipment = $arFields;
}
unset($equipment);

foreach ($arResult["PROPERTIES"]["GENERAL_EQUIPMENT"]["VALUE"] as &$equipment) {
    $arSelect = Array("ID", "NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT");
    $arFilter = Array("IBLOCK_ID" => "9", "ID" => $equipment);
    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
    while ($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
    }
    $arFields["PREVIEW_PICTURE"] = CFile::GetPath($arFields["PREVIEW_PICTURE"]);
    $equipment = array();
    $equipment = $arFields;
}
unset($equipment);

foreach ($arResult["PROPERTIES"]["SPECIAL_EQUIPMENT"]["VALUE"] as &$equipment) {
    $arSelect = Array("ID", "NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT");
    $arFilter = Array("IBLOCK_ID" => "10", "ID" => $equipment);
    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
    while ($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
    }
    $arFields["PREVIEW_PICTURE"] = CFile::GetPath($arFields["PREVIEW_PICTURE"]);
    $equipment = array();
    $equipment = $arFields;
}
unset($equipment);

foreach ($arResult["PROPERTIES"]["PRACTICAL_USE"]["VALUE"] as &$equipment) {
    $arSelect = Array("ID", "NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT");
    $arFilter = Array("IBLOCK_ID" => "11", "ID" => $equipment);
    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
    while ($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
    }
    $arFields["PREVIEW_PICTURE"] = CFile::GetPath($arFields["PREVIEW_PICTURE"]);
    $equipment = array();
    $equipment = $arFields;
}
unset($equipment);

$component = $this->getComponent();