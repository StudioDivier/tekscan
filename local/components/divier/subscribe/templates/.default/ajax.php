<?// if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");


$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
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

$name = clean($name);
$phone = clean($phone);
$email = clean($email);
$msg = clean($msg);
$policy = clean($policy);

if (!empty($name) && !empty($phone) && !empty($email) && !empty($msg) && !empty($policy)) {
    $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL);

    if($policy == "on")
        $policy = "Y";

    if (check_length(2, 25, $name) && check_length(4, 20, $phone) && check_length(2, 1000, $msg) && $email_validate) {
        if (CModule::IncludeModule("iblock")) {
            $bs = new CIBlockElement;

            $PROP = array();
            $PROP[18] = $phone;
            $PROP[19] = $email_validate;
            $PROP[20] = $msg;
            $PROP[21] = array("VALUE" => "5");

            $arFields = Array(
//                "ACTIVE_FROM" => date('d.m.Y H:i:s'),
                "MODIFIED_BY" => $GLOBALS['USER']->GetID(),
                "ACTIVE" => "Y",
                "IBLOCK_ID" => "12",
                "IBLOCK_SECTION_ID" => false,
                "NAME" => $name,
                "PROPERTY_VALUES" => $PROP
//                "NAME" => $name,
//                "PROPERTY_EMAIL_VALUE" => $email,
//                "PROPERTY_PHONE" => $phone,
//                "PROPERTY_MSG" => $msg,
//                "PROPERTY_POLICY" => $policy
            );

            if($ID > 0)
            {
                $res = $bs->Update($ID, $arFields);
            }
            else
            {
                $ID = $bs->Add($arFields);
                $res = ($ID>0);
            }

        }
        echo "Спасибо за подписку";
    } else { // добавили сообщение
        echo "Введенные данные некорректны";
    }
} else {
    echo "Заполните пустые поля";
}