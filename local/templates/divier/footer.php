<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<section class="footer">
    <div class="container">
        <div class="footer-wrapper">
            <div class="footer-logo">
                <a href="<?= SITE_DIR ?>">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/svg/logo2.svg" alt="">
                </a>
            </div>
            <div class="footer-address">
                <img class="address" src="<?= SITE_TEMPLATE_PATH ?>/images/svg/address2.svg">
                <p>105064, г. Москва, ул. Земляной Вал, 9, этаж 4, офис 4065</p>
            </div>
            <div class="footer-dev-info">
                <p>Общество с ограниченной ответственностью «Техскан-Сервис»,</p>
                <p>ИНН: 7724406801 / 770901001, БИК: 044525700, Кор/счет:  30101810200000000700</p>
                <p class="dev"><a href="https://www.divier.ru/">Создание сайта </a> ДиВиЕР</p>
            </div>

        </div>
    </div>
</section>
<?
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.4.1.min.js");
?>
</body>
</html>