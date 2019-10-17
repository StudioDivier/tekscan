<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (CModule::IncludeModule("iblock")) {
    $arResult = array();
    $arSelect = Array("DETAIL_PICTURE", "UF_ICON", "NAME", "SECTION_PAGE_URL");
    $arFilter = Array("IBLOCK_ID" => "5", "ACTIVE" => "Y");

    $res = CIBlockSection::GetList(Array(), $arFilter, false, $arSelect);
    while ($ob = $res->GetNext()) {
        $ob["DETAIL_PICTURE"] = CFile::GetPath($ob["DETAIL_PICTURE"]);
        $ob["UF_ICON"] = CFile::GetPath($ob["UF_ICON"]);
        $arResult[] = $ob;
    }
}

$this->IncludeComponentTemplate();