<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
foreach ($arResult["ITEMS"] as &$item) {
    $item["PROPERTY_PICTURE_ON_MAIN_VALUE"] = CFile::GetPath($item["PROPERTY_PICTURE_ON_MAIN_VALUE"]);

    $arr = ParseDateTime($item["ACTIVE_FROM"], "DD.MM.YYYY");

    switch ($arr["MM"]) {
        case "01":
            {
                $item["ACTIVE_FROM"] = $arr["DD"] . " Января " . $arr["YYYY"];
                break;
            }
        case "02":
            {
                $item["ACTIVE_FROM"] = $arr["DD"] . " Февраля " . $arr["YYYY"];
                break;
            }
        case "03":
            {
                $item["ACTIVE_FROM"] = $arr["DD"] . " Марта " . $arr["YYYY"];
                break;
            }
        case "04":
            {
                $item["ACTIVE_FROM"] = $arr["DD"] . " Апреля " . $arr["YYYY"];
                break;
            }
        case "05":
            {
                $item["ACTIVE_FROM"] = $arr["DD"] . " Мая " . $arr["YYYY"];
                break;
            }
        case "06":
            {
                $item["ACTIVE_FROM"] = $arr["DD"] . " Июня " . $arr["YYYY"];
                break;
            }
        case "07":
            {
                $item["ACTIVE_FROM"] = $arr["DD"] . " Июля " . $arr["YYYY"];
                break;
            }
        case "08":
            {
                $item["ACTIVE_FROM"] = $arr["DD"] . " Августа " . $arr["YYYY"];
                break;
            }
        case "09":
            {
                $item["ACTIVE_FROM"] = $arr["DD"] . " Сентебря " . $arr["YYYY"];
                break;
            }
        case "10":
            {
                $item["ACTIVE_FROM"] = $arr["DD"] . " Октября " . $arr["YYYY"];
                break;
            }
        case "11":
            {
                $item["ACTIVE_FROM"] = $arr["DD"] . " Ноября " . $arr["YYYY"];
                break;
            }
        case "12":
            {
                $item["ACTIVE_FROM"] = $arr["DD"] . " Декабря " . $arr["YYYY"];
                break;
            }
    }
}