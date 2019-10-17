<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!empty($arResult)):?>
    <section class="index-menu">
        <? foreach ($arResult as $item): ?>
            <div class="index-menu-item">
                <img src="<?= $item["DETAIL_PICTURE"] ?>" alt="<?= $item["NAME"] ?>">
                <a href="<?= $item["SECTION_PAGE_URL"] ?>">
                    <div class="index-menu-item-content">
                        <img src="<?= $item["UF_ICON"] ?>" alt="<?= $item["NAME"] ?>">
                        <p><?= $item["NAME"] ?></p>
                    </div>
                </a>
            </div>
        <? endforeach; ?>
    </section>
<? endif; ?>