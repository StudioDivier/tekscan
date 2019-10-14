<? // if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$_POST['code'] = preg_replace('~\D+~', '', $_POST['code']);
$_POST['phone'] = preg_replace('~\D+~', '', $_POST['phone']);
$phone = "+7 " . $_POST["code"] . " " . $_POST["phone"];
$policy = $_POST["policy"];

function clean($value = "")
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    return $value;
}

function check_length($min, $max, $value = "")
{
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}

$phone = clean($phone);
$policy = clean($policy);

if (!empty($phone) && !empty($policy)) {

    if ($policy == "on")
        $policy = "Y";

    if (check_length(4, 20, $phone)) {
        if (CModule::IncludeModule("iblock")) {
            $bs = new CIBlockElement;

            $PROP = array();
            $PROP[23] = $phone;
            $PROP[24] = array("VALUE" => "6");

            $arFields = Array(
                "MODIFIED_BY" => $GLOBALS['USER']->GetID(),
                "ACTIVE" => "Y",
                "IBLOCK_ID" => "15",
                "IBLOCK_SECTION_ID" => false,
                "NAME" => "Обратный звонок " . date("d-m-o H:i:s"),
                "PROPERTY_VALUES" => $PROP
            );

            if ($ID > 0) {
                $res = $bs->Update($ID, $arFields);
            } else {
                $ID = $bs->Add($arFields);
                $res = ($ID > 0);
            }
        }
        echo "Спасибо за подписку";
    } else {
        echo "Введенные данные некорректны";
    }
} else {
    echo "Заполните пустые поля";
}