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
 * @var string $templateFolder
 */

$this->setFrameMode(true); ?>
<section class="services-card">
    <div class="container">
        <div class="title-38s mb-45"><?= $arResult["NAME"] ?></div>
        <div class="title-26s mb-40">Общий обзор:</div>
        <div class="text-18Light mb-40">
            <?= $arResult["DETAIL_TEXT"] ?>
        </div>
        <div class="mb-20">
            <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arResult["NAME"] ?>">
        </div>
        <div class="text-15Light mb-60"><?= $arResult["DETAIL_PICTURE"]["DESCRIPTION"] ?></div>
        <div class="red-dot mb-40">
            <?= htmlspecialchars_decode($arResult["PROPERTIES"]["UL"]["VALUE"]["TEXT"]) ?>
        </div>

        <table class="mb-60">
            <tbody>
            <tr>
                <? foreach ($arResult["PROPERTIES"]["MORE_EQUIPMENT"]["VALUE"] as $more_equipment): ?>
                    <th><?= $more_equipment["NAME"] ?></th>
                <? endforeach; ?>
            </tr>
            <tr>
                <? foreach ($arResult["PROPERTIES"]["MORE_EQUIPMENT"]["VALUE"] as $more_equipment): ?>
                    <td><img src="<?= $more_equipment["PREVIEW_PICTURE"] ?>" alt="<?= $more_equipment["NAME"] ?>">
                    </td>
                <? endforeach; ?>
            </tr>
            <tr>
                <? foreach ($arResult["PROPERTIES"]["MORE_EQUIPMENT"]["VALUE"] as $more_equipment): ?>
                    <td><?= $more_equipment["PREVIEW_TEXT"] ?></td>
                <? endforeach; ?>
            </tr>
            </tbody>
        </table>
        <div class="text-18Light mb-35"><b>Посмотрите короткий видеоролик, описывающий некоторые возможности
                программного обеспечения Tekscan</b></div>
        <div class="mb-63">
            <?= htmlspecialchars_decode($arResult["PROPERTIES"]["VIDEO"]["VALUE"]) ?>
        </div>
        <div class="title-26s mb-35">Продукты и решения:</div>
        <div class="title-22regular mb-30">Оборудование общего назначения</div>
        <div class="text-18Light mb-45">Оборудование общего назначения Tekscan может быть гибко сконфигурировано под
            определенную задачу, поскольку может использовать любые
            модели сенсоров из стандартного каталога или специальные сенсоры, изготовленные под заказ.
        </div>
        <? foreach ($arResult["PROPERTIES"]["GENERAL_EQUIPMENT"]["VALUE"] as $general_equipment): ?>
            <div class="services-card-image-text mb-50">
                <div class="services-card-image-text__image">
                    <img src="<?= $general_equipment["PREVIEW_PICTURE"] ?>" alt="<?= $general_equipment["NAME"] ?>">
                </div>
                <div class="services-card-image-text__text">
                    <div class="title-22regular mb-20"><?= $general_equipment["NAME"] ?></div>
                    <p><?= $general_equipment["PREVIEW_TEXT"] ?></p>
                </div>
            </div>
        <? endforeach; ?>
        <div class="title-22regular mb-30">Оборудование специального назначения</div>
        <div class="text-18Light mb-45">Аппаратно-программные измерительные комплексы оборудования со специально
            разработанными сенсорами, электронными компонентами и
            программными продуктами, адаптированными для определенного применения..
        </div>
        <? foreach ($arResult["PROPERTIES"]["SPECIAL_EQUIPMENT"]["VALUE"] as $special_equipment): ?>
            <div class="services-card-image-text">
                <div class="services-card-image-text__image">
                    <img src="<?= $special_equipment["PREVIEW_PICTURE"] ?>" alt="<?= $special_equipment["NAME"] ?>">
                </div>
                <div class="services-card-image-text__text">
                    <div class="title-22regular mb-20"><?= $special_equipment["NAME"] ?></div>
                    <p><?= $special_equipment["PREVIEW_TEXT"] ?></p>
                </div>
            </div>
        <? endforeach; ?>
        <div class="title-22regular mb-45">Примеры практического использования оборудования:</div>
        <? foreach ($arResult["PROPERTIES"]["PRACTICAL_USE"]["VALUE"] as &$practical_use): ?>
            <div class="services-card-image-text">
                <div class="services-card-image-text__image">
                    <img src="<?= $practical_use["PREVIEW_PICTURE"] ?>" alt="<?= $practical_use["NAME"] ?>">
                </div>
                <div class="services-card-image-text__text">
                    <div class="title-22regular mb-20"><?= $practical_use["NAME"] ?></div>
                    <p><?= $practical_use["PREVIEW_TEXT"] ?></p>
                </div>
            </div>
        <? endforeach; ?>
        <?$APPLICATION->IncludeComponent("divier:subscribe","")?>
    </div>
</section>