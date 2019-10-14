<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult["ITEMS"] as &$item) {
    foreach ($item["PROPERTIES"]["FAQ_MORE"]["VALUE"] as &$faq) {
        $arSelect = Array("ID", "NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT");
        $arFilter = Array("IBLOCK_ID" => "14", "ID" => $faq);
        $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
        while ($ob = $res->GetNextElement()) {
            $arFields = $ob->GetFields();
        }
        $arFields["PREVIEW_PICTURE"] = CFile::GetPath($arFields["PREVIEW_PICTURE"]);
        $faq = array();
        $faq = $arFields;
    }
}
unset($item);

$component = $this->getComponent();