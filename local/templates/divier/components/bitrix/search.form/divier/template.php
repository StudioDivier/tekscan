<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="header-search ">
    <form action="<?= $arResult["FORM_ACTION"] ?>">
            <input name="q" id="search-submit-button" placeholder="<?= GetMessage("BSF_T_SEARCH_BUTTON"); ?>">
            <button type="submit"><img src="<?= $templateFolder ?>/images/search.svg"></button>
    </form>
</div>