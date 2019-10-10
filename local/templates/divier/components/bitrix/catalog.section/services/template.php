<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |    Attention!
 * |    The following comments are for system use
 * |    and are required for the component to work correctly in ajax mode:
 * |    <!-- items-container -->
 * |    <!-- pagination-container -->
 * |    <!-- component-end -->
 */

$this->setFrameMode(true);
if (isset($_POST["tile"])) {
    if ($_POST["tile"] == "Y") {
        $class = "services-list-items-v1";
    } else {
        $class = "services-list-items-v2";
    }
} else {
    $class = "services-list-items-v1";
}
?>

<div class="services-items services-products <?= $class ?>">
    <? foreach ($arResult["ITEMS"] as $item): ?>
        <div class="services-item">
            <div class="services-item-product-image">
                <img src="<?= $item["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $item["NAME"] ?>">

            </div>
            <div class="services-list-item-text">
                <a class="services-item-product-name" href="<?= $item["DETAIL_PAGE_URL"] ?>"><?= $item["NAME"] ?></a>
                <div class="services-price"><?= ($item["PROPERTIES"]["PRICE"]["VALUE"]) ? $item["PROPERTIES"]["PRICE"]["VALUE"] . ' руб' : "Цену уточняйте" ?></div>
                <div class="services-in-stock">
                    <div class="services-in-stock-button"><?= ($item["PROPERTIES"]["IN_STOCK"]["VALUE"]) ? "В наличии" : "Нет в наличии" ?></div>
                    <? if (($item["PROPERTIES"]["WHOLESALE"]["VALUE"]) && ($item["PROPERTIES"]["RETAIL"]["VALUE"])):?>
                        <div class="services-in-stock-button">Оптом и в розницу</div>
                    <?elseif ($item["PROPERTIES"]["WHOLESALE"]["VALUE"]):?>
                        <div class="services-in-stock-button">Оптом</div>
                    <?elseif ($item["PROPERTIES"]["RETAIL"]["VALUE"]):?>
                        <div class="services-in-stock-button">В розницу</div>
                    <?endif;?>
                </div>
            </div>
            <div class="services-item-product-hover-button">
                <a href="javascript:void(0)" class="siphbc-one">Обратный звонок</a>
                <a href="javascript:void(0)" class="siphbc-two">Задать вопрос</a>
            </div>
        </div>
    <? endforeach; ?>
</div>
<div class="modal modal-services-feedback">
    <div class="bg-exit button-exit"></div>
    <div class="modal-content">
        <div class="container">
            <div class="modal-content-services">
                <div class="modal-title-company">Компания</div>
                <div class="modal-title-company-name">ООО "Техскан-Сервис"</div>
                <div class="services-modal-list services-modal-phone">
                    <img src="<?= $templateFolder ?>/images/silver-phone.png">
                    <p class="noselect services-modal-list-button">+7 показать номер</p>
                    <div class="services-modal-dropdown d-none">
                        <div class="services-modal-dropdown-exit noselect">x</div>
                        <div class="services-modal-phone-title">Сообщите, что вы нашли предложение на Tiu.ru</div>
                        <div class="services-modal-phone__phone">
                            <a href="tel:+74955043626">+7 (495) 504-36-26</a>
                            <a href="tel:+74832722215">+7 (483) 272-22-15</a>
                        </div>
                        <div class="services-modal-phone__link">
                            <a href="#">Все контакты компании</a>
                        </div>
                    </div>
                </div>
                <div class="services-modal-list services-modal-phone">
                    <img src="<?= $templateFolder ?>/images/silver-map-icon.png">
                    <p class="services-modal-list-text">105064, ул. Земляной Вал, 9, этаж 4, офис 4065 (БЦ Ситидел),
                        Москва, Московская область, Россия</p>

                </div>
                <div class="services-modal-list services-modal-clock">
                    <img src="<?= $templateFolder ?>/images/silver-clock.png">
                    <p class="noselect services-modal-list-button">График работы</p>
                    <div class="services-modal-dropdown d-none">
                        <div class="services-modal-dropdown-exit noselect">x</div>
                        <table>
                            <tr>
                                <th>День</th>
                                <th>Время работы</th>
                                <th>Перерыв</th>
                            </tr>
                            <tr>
                                <td>понедельник</td>
                                <td>10:00 - 17:30</td>
                                <td>13:30 - 14:00</td>
                            </tr>
                            <tr>
                                <td>вторник</td>
                                <td>10:00 - 17:30</td>
                                <td>13:30 - 14:00</td>
                            </tr>
                            <tr>
                                <td>среда</td>
                                <td>10:00 - 17:30</td>
                                <td>13:30 - 14:00</td>
                            </tr>
                            <tr>
                                <td>четверг</td>
                                <td>10:00 - 17:30</td>
                                <td>13:30 - 14:00</td>
                            </tr>
                            <tr>
                                <td>пятница</td>
                                <td>10:00 - 17:30</td>
                                <td>13:30 - 14:00</td>
                            </tr>
                            <tr>
                                <td>суббота</td>
                                <td>Выходной</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>воскресенье</td>
                                <td>Выходной</td>
                                <td></td>
                            </tr>
                        </table>
                        <div class="services-modal-clock-text">* Время указано для региона: Россия, Москва</div>
                    </div>
                </div>
                <div class="services-modal-list services-modal-delivery mb-55">
                    <img src="<?= $templateFolder ?>/images/silver-delivery.png">
                    <p class="noselect services-modal-list-button">График работы</p>
                    <div class="services-modal-dropdown d-none">
                        <div class="services-modal-dropdown-exit noselect">x</div>
                        <div class="services-modal-delivery-14s mb-25">Доставка осуществляется только по предоплате.
                        </div>
                        <div class="services-modal-delivery-16s mb-20">Способы доставки:</div>
                        <ul>
                            <li class="services-modal-delivery-14s mb-25">Доставка почтой</li>
                        </ul>
                        <div class="services-modal-delivery-16s mb-20">Способы оплаты:</div>
                        <ul>
                            <li class="services-modal-delivery-14s mb-25">Доставка почтой</li>
                        </ul>
                        <div class="services-modal-delivery-16s mb-20">Регионы доставки:</div>
                        <ul>
                            <li class="services-modal-delivery-14s mb-20">Россия</li>
                            <ul class="pl">
                                <li class="services-modal-delivery-16s mb-20">Дальневосточный федеральный округ:</li>
                                <ul class="pl">
                                    <li class="services-modal-delivery-16s mb-15">Амурская область</li>
                                    <li class="services-modal-delivery-16s mb-15">Еврейская автономная область</li>
                                    <li class="services-modal-delivery-16s mb-15">Забайкальский край:</li>
                                    <ul class="pl">
                                        <li class="services-modal-delivery-16s mb-15">Чита</li>
                                    </ul>
                                    <li class="services-modal-delivery-16s mb-15">Камчатский край:</li>
                                    <ul class="pl">
                                        <li class="services-modal-delivery-16s mb-15">Петропавловск-Камчатский</li>
                                    </ul>
                                    <li class="services-modal-delivery-16s mb-15">Магаданская область</li>
                                    <li class="services-modal-delivery-16s mb-15">Приморский край:</li>
                                </ul>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="modal-product mb-50">
                    <div class="modal-product-images"><img src="../images/jpg/services-11.jpg"></div>
                    <div class="modal-product-text">
                        <div class="modal-product-name">I-Scan® - универсальный прибор для регистрации контактных
                            давлений с отображением цветовых профилей
                        </div>
                        <div class="services-price">Цену уточняйте</div>
                        <div class="services-in-stock">
                            <div class="services-in-stock-button">В наличии</div>
                        </div>
                    </div>
                </div>

                <div class="button-exit button-exit-x">x</div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-services-question">
    <div class="bg-exit button-exit"></div>
    <div class="modal-content">
        <div class="container">
            <div class="modal-content-services">
                <div class="modal-product mb-50">
                    <div class="modal-product-images"><img src="../images/jpg/services-11.jpg"></div>
                    <div class="modal-product-text">
                        <div class="modal-product-name">I-Scan® - универсальный прибор для регистрации контактных
                            давлений с отображением цветовых профилей
                        </div>
                        <div class="services-price">Цену уточняйте</div>
                        <div class="services-in-stock">
                            <div class="services-in-stock-button">В наличии</div>
                        </div>
                    </div>
                </div>
                <div class="modal-services-question-text">Оставьте свой номер телефона и представитель компании с вами
                    свяжется.
                </div>
                <div class="modal-services-question-input-phone">
                    <p>+7</p>
                    <input class="modal-services-question-firs-input">
                    <input class="modal-services-question-second-input">
                </div>
                <div class="modal-services-question-button"><a href="#">Отправить</a></div>
                <div class="privacy-pol">
                    <p><input type="checkbox">
                        <span>Даю согласие на обработку моих персональных данных. Соглашаюсь с  <a href="#"> Политике конфиденциальности</a>и ознакомлен с <a
                                    href="#"> Политикой в отношении обработки персональных данных.</a></span></p>
                </div>
                <div class="button-exit button-exit-x">x</div>
            </div>
        </div>
    </div>
</div>