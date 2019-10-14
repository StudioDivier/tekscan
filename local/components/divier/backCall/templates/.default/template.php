<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<form class="call_back" method="post" action="<?= $templateFolder ?>/ajax.php">
    <div class="modal-services-question-input-phone">
        <p>+7</p>
        <input type="number" name="code" class="modal-services-question-firs-input" required>
        <input type="number" name="phone" class="modal-services-question-second-input" required>
    </div>
    <div class="modal-services-question-button"><button type="submit">Отправить</button></div>
    <div class="privacy-pol">
        <p><input name="policy" type="checkbox" required>
            <span>Даю согласие на обработку моих персональных данных. Соглашаюсь с  <a href="#"> Политике конфиденциальности</a>и ознакомлен с <a
                        href="#"> Политикой в отношении обработки персональных данных.</a>
            </span>
        </p>
    </div>
</form>