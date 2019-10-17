<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>
<section>
    <div class="container">
        <div class="title-38s mb-45"><?= $APPLICATION->GetTitle() ?></div>
        <? if ($arResult["SEARCH"]): ?>
            <? if ($arParams["DISPLAY_TOP_PAGER"] != "N") echo $arResult["NAV_STRING"] ?>
            <hr>
            <? foreach ($arResult["SEARCH"] as $item): ?>
                <div class="news-search-item">
                    <div class="news-search-item__text">
                        <div class="news-search-item__date">Изменен: <?= $item["DATE_CHANGE"] ?></div>
                        <div class="news-search-item__date">Путь: <?= $item["CHAIN_PATH"] ?></div>
                        <div class="news-search-item__name"><a
                                    href="<?= $item["URL"] ?>"><?= $item["TITLE_FORMATED"] ?></a></div>
                        <div class="news-search-item__des text-18Light"><?= $item["BODY_FORMATED"] ?></div>
                        <div class="news-search-item__button"><a href="#">Подробнее <img
                                        src="<?= $templateFolder ?>/images/blue-arrow-right.png" alt="Подробнее"> </a>
                        </div>
                    </div>
                </div>
                <hr>
            <? endforeach; ?>
            <? if ($arParams["DISPLAY_TOP_PAGER"] != "N") echo $arResult["NAV_STRING"] ?>
        <? else: ?>
            <h3>К сожалению по вашему запросу ничего не найдено</h3>
        <? endif; ?>
    </div>
</section>