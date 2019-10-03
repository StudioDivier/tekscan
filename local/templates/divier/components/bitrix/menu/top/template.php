<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (!empty($arResult)): ?>
    <div class="header-menu">
        <div class="container">
            <div>
                <div class="burger">
                    <div class="burger-line"></div>
                </div>
            </div>
            <ul class="header-menu-items">
                <? foreach ($arResult as $arItem): ?>
                    <li>
                        <a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                        <? if ($arItem["PARAMS"]): ?>
                            <div class="header-dropdown <?= ($arItem["TEXT"] == "Каталог продукции") ? "w" : "" ?>">
                                <? foreach ($arItem["PARAMS"]["CHILDREN"] as $child): ?>
                                    <a href="<?= $child["LINK"] ?>"><?= $child["NAME"] ?></a>
                                <? endforeach ?>
                            </div>
                        <? endif; ?>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
    </div>
<? endif ?>