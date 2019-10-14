<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="mb-110">
    <div class="feedback">
        <div class="feedback-title title-38s">Форма обратной связи</div>
        <div class="feedback-content">
            <form id="subscribe_form" action="<?= $templateFolder ?>/ajax.php" method="post">
                <div class="feedback-input-list">
                    <div class="feedback-input">
                        <input type="text" name="name" placeholder="Имя" required>
                    </div>
                    <div class="feedback-input">
                        <input type="number" name="phone" placeholder="Телефон" required>
                    </div>
                    <div class="feedback-input">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="feedback-textarea-list">
                    <div class="feedback-textarea">
                        <textarea name="msg" placeholder="Сообщение" required></textarea>
                    </div>
                    <div class="feedback-button">
                        <button type="submit">Отправить</button>
                    </div>
                    <div class="privacy-pol">
                        <p><input name="policy" type="checkbox" required> <span>Я согласен на обработку персональных данных согласно <a
                                        href="#"> Политике конфиденциальности</a></span>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>