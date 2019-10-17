<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>
    <section class="services-card">
        <div class="container">
            <div class="title-38s mb-45">
                О компании
            </div>
            <?
            if (!CModule::IncludeModule("iblock"))
                return;

            $res = CIBlockElement::GetByID(55);
            if ($ar_res = $res->GetNext())
                echo $ar_res['DETAIL_TEXT'];
            ?>
            <div class="mb-110" style="margin-top: 50px;">
                <? $APPLICATION->IncludeComponent("divier:subscribe", "") ?>
            </div>
        </div>
    </section><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>