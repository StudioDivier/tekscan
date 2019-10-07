<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arr = ParseDateTime($arResult["ACTIVE_FROM"], "DD.MM.YYYY");

switch ($arr["MM"]) {
    case "01": {
        $arResult["ACTIVE_FROM"] = $arr["DD"] . " Января " . $arr["YYYY"];
        break;
    }
    case "02": {
        $arResult["ACTIVE_FROM"] = $arr["DD"] . " Февраля " . $arr["YYYY"];
        break;
    }
    case "03": {
        $arResult["ACTIVE_FROM"] = $arr["DD"] . " Марта " . $arr["YYYY"];
        break;
    }
    case "04": {
        $arResult["ACTIVE_FROM"] = $arr["DD"] . " Апреля " . $arr["YYYY"];
        break;
    }
    case "05": {
        $arResult["ACTIVE_FROM"] = $arr["DD"] . " Мая " . $arr["YYYY"];
        break;
    }
    case "06": {
        $arResult["ACTIVE_FROM"] = $arr["DD"] . " Июня " . $arr["YYYY"];
        break;
    }
    case "07": {
        $arResult["ACTIVE_FROM"] = $arr["DD"] . " Июля " . $arr["YYYY"];
        break;
    }
    case "08": {
        $arResult["ACTIVE_FROM"] = $arr["DD"] . " Августа " . $arr["YYYY"];
        break;
    }
    case "09": {
        $arResult["ACTIVE_FROM"] = $arr["DD"] . " Сентебря " . $arr["YYYY"];
        break;
    }
    case "10": {
        $arResult["ACTIVE_FROM"] = $arr["DD"] . " Октября " . $arr["YYYY"];
        break;
    }
    case "11": {
        $arResult["ACTIVE_FROM"] = $arr["DD"] . " Ноября " . $arr["YYYY"];
        break;
    }
    case "12": {
        $arResult["ACTIVE_FROM"] = $arr["DD"] . " Декабря " . $arr["YYYY"];
        break;
    }
}