<? // if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$organization = $_POST["organization"];
$address = $_POST["address"];
$inn = $_POST["inn"];
$link = $_POST["link"];
$fio = $_POST["fio"];
$position = $_POST["position"];
$subdivision = $_POST["subdivision"];
$email = $_POST["mail"];
$working_phone = $_POST["working_phone"];
$mobile_phone = $_POST["mobile_phone"];
$msg = $_POST["msg"];
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

$organization = clean($organization);
$address = clean($address);
$inn = clean($inn);
$link = clean($link);
$fio = clean($fio);
$position = clean($position);
$subdivision = clean($subdivision);
$email = clean($email);
$working_phone = clean($working_phone);
$mobile_phone = clean($mobile_phone);
$msg = clean($msg);
$policy = clean($policy);

if (!empty($organization) && !empty($address) && !empty($inn) && !empty($link) && !empty($fio) && !empty($position)
    && !empty($subdivision) && !empty($email) && !empty($working_phone) && !empty($mobile_phone) && !empty($msg) && !empty($policy)) {
    $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ($policy == "on")
        $policy = "Y";

    if (check_length(2, 40, $organization) && check_length(4, 20, $mobile_phone) && check_length(2, 1000, $msg) && $email_validate) {
        if (CModule::IncludeModule("iblock")) {
            $bs = new CIBlockElement;

            $PROP = array();
            $PROP[25] = $organization;
            $PROP[26] = $address;
            $PROP[27] = $inn;
            $PROP[28] = $fio;
            $PROP[29] = $position;
            $PROP[30] = $subdivision;
            $PROP[31] = $link;
            $PROP[32] = $email;
            $PROP[33] = $working_phone;
            $PROP[34] = $mobile_phone;
            $PROP[35] = $msg;
            $PROP[36] = array("VALUE" => "7");

            $arFields = Array(
//                "ACTIVE_FROM" => date('d.m.Y H:i:s'),
                "MODIFIED_BY" => $GLOBALS['USER']->GetID(),
                "ACTIVE" => "Y",
                "IBLOCK_ID" => "16",
                "IBLOCK_SECTION_ID" => false,
                "NAME" => $fio,
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
    } else { // добавили сообщение
        echo "Введенные данные некорректны";
    }
} else {
    echo "Заполните пустые поля";
}