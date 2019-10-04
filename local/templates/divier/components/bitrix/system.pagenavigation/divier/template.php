<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="pagination-items mb-63">
    <?
    if(!$arResult["NavShowAlways"])
    {
        if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
            return;
    }
    // to show always first and last pages
    $arResult["nStartPage"] = 1;
    $arResult["nEndPage"] = $arResult["NavPageCount"];

    $sPrevHref = '';
    if ($arResult["NavPageNomer"] > 1) {
        $bPrevDisabled = false;

        if ($arResult["bSavePage"] || $arResult["NavPageNomer"] > 2) {
            $sPrevHref = $arResult["sUrlPath"] . '?' . $strNavQueryString . 'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"] - 1);
        } else {
            $sPrevHref = $arResult["sUrlPath"] . $strNavQueryStringFull;
        }
    } else {
        $bPrevDisabled = true;
    }

    $sNextHref = '';
    if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]) {
        $bNextDisabled = false;
        $sNextHref = $arResult["sUrlPath"] . '?' . $strNavQueryString . 'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"] + 1);
    } else {
        $bNextDisabled = true;
    }

    $bFirst = true;
    $bPoints = false; ?>
    <? if ($arResult["NavPageNomer"] == $arResult["nStartPage"]): ?>
        <span class="pagination-item pagination-item-image">
                <img src="<?= $templateFolder ?>/images/pagin-arrow-left_disabled.png" alt="Назад">
            </span>
    <? else: ?>
        <a href="<?= $sPrevHref ?>" class="pagination-item pagination-item-image">
            <img src="<?= $templateFolder ?>/images/pagin-arrow-left.png" alt="Назад">
        </a>
    <? endif; ?>
    <?
    do {
        if ($arResult["nStartPage"] <= 2 || $arResult["nEndPage"] - $arResult["nStartPage"] <= 1 || abs($arResult['nStartPage'] - $arResult["NavPageNomer"]) <= 2) {

            if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
                <span class="pagination-item active"><?= $arResult["nStartPage"] ?></span>
            <?
            elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):
                ?>
                <a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"
                   class="pagination-item"><?= $arResult["nStartPage"] ?></a>
            <?
            else:
                ?>
                <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"
                   class="pagination-item"><?= $arResult["nStartPage"] ?></a>
            <?
            endif;
            $bFirst = false;
            $bPoints = true;
        } else {
            if ($bPoints) {
                ?><span class="pagination-item">...</span><?
                $bPoints = false;
            }
        }
        $arResult["nStartPage"]++;
    } while ($arResult["nStartPage"] <= $arResult["nEndPage"]); ?>
    <? if ($arResult["NavPageNomer"] == $arResult["nEndPage"]): ?>
        <span class="pagination-item pagination-item-image">
                <img src="<?= $templateFolder ?>/images/pagin-arrow-right_disabled.png" alt="Вперед">
            </span>
    <? else: ?>
        <a href="<?= $sNextHref ?>" class="pagination-item pagination-item-image">
            <img src="<?= $templateFolder ?>/images/pagin-arrow-right.png" alt="Вперед">
        </a>
    <? endif; ?>
</div>


