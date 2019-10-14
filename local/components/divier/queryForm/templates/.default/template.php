<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<form class="queryForm feedback d-none" method="post" action="<?= $templateFolder ?>/ajax.php">
    <div class="feedback-title title-38s">Отправить запрос</div>
    <div class="title-feedback-input">Сведения об организации:</div>
    <div class="feedback-content mb-38">
        <div class="feedback-input-list">
            <div class="feedback-input">
                <input name="organization" placeholder="Наименование организации" required>
            </div>
            <div class="feedback-input">
                <input name="address" placeholder="Адрес (индекс, город, улица, дом)" required>
            </div>
        </div>
        <div class="feedback-input-list">
            <div class="feedback-input">
                <input name="inn" placeholder="ИНН организации" required>
            </div>
            <div class="feedback-input">
                <input name="link" placeholder="Cсылка на сайт" required>
            </div>
        </div>
    </div>
    <div class="title-feedback-input">Сведения о контактном лице:</div>
    <div class="feedback-content mb-38">
        <div class="feedback-input-list">
            <div class="feedback-input">
                <input name="fio" placeholder="ФИО" required>
            </div>
            <div class="feedback-input">
                <input name="position" placeholder="Должность" required>
            </div>
            <div class="feedback-input">
                <input name="subdivision" placeholder="Подразделение" required>
            </div>
        </div>
        <div class="feedback-input-list">
            <div class="feedback-input">
                <input name="mail" placeholder="Эл. Почта">
            </div>
            <div class="feedback-input">
                <input name="working_phone" placeholder="Рабочий тлф." required>
            </div>
            <div class="feedback-input">
                <input name="mobile_phone" placeholder="Мобильный тлф." required>
            </div>
        </div>
    </div>
    <div class="title-feedback-input">Суть запроса</div>
    <div class="feedback-content mb-38">
        <div class="feedback-textarea-list">
            <div class="feedback-textarea">
                <textarea name="msg" placeholder="Сообщение" required></textarea>
            </div>
            <div class="privacy-pol mb-50">
                <p><input name="policy" type="checkbox" required> <span>Я согласен на обработку персональных данных согласно <a href="#"> Политике конфиденциальности</a></span></p>
            </div>
            <div class="feedback-button">
                <button type="submit">Отправить</button>
            </div>
        </div>
        <div class="feedback-input-list">

        </div>
    </div>
</form>