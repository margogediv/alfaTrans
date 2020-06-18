<div id="modal-overlay" style="display: none;"></div>
<form class="form form-modal" action="#" style="display: none;">
    <input type="hidden" name="form" value="modal">
    <input type="hidden" name="theme" value="Новая заявка">
    <div class="form-group group-input">
        <input name="nik" type="text" placeholder="Имя*" required>
    </div>
    <div class="form-group group-input">
        <input name="tel" type="text" placeholder="Номер телефона*" required>
    </div>
    <div class="form-group group-input">
        <input name="mail" type="email" placeholder="E-Mail">
    </div>
    <div class="form-group group-textarea">
        <textarea name="message" placeholder="Комментарий"></textarea>
    </div>
    <div class="form-group group-checkbox">
        <label for="check-modal">
            <input id="check-modal" name="check" type="checkbox" value="1" required>
            <span>Я даю согласие на обработку моих персональных данных</span>
        </label>
    </div>

    <div class="form-group group-captcha">
        <div class="captcha">
            <div
            <div id="my-captha"></div>
        </div>
    </div>
    </div>

    <div class="form-group group-buttons">
        <span class="btn btn-gray">отмена</span>
        <button id="submit2" disabled="disabled" class="btn btn-red">отправить</button>
    </div>
</form>

<div id="modal-message" class="modal-message" style="display: none;">
    <div class="modal-container">
        <div class="title">
            <strong>Благодарим</strong>
            <span>за Ваше обращение!</span>
        </div>
        <div class="description">
            Мы свяжемся с Вами<br>
            в течение 48 часов
        </div>

        <button class="btn btn-red">Понятно, жду!</button>
    </div>
</div>

<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/owlCarousel/owl.carousel.min.js"></script>
<script src="/js/app.js"></script>
<script type="text/javascript">
    var onloadCallback = function () {
        grecaptcha.render('my-captha', {
            'sitekey': '6LelA_kUAAAAABKvL6RWauDHVD4wWcAZz8lF_qgt',
            'callback': function () {
                document.getElementById('submit').removeAttribute('disabled');
            }
        });

        // grecaptcha.render('my-captha-2', {
        //     'sitekey': '6LelA_kUAAAAABKvL6RWauDHVD4wWcAZz8lF_qgt',
        //     'callback': function () {
        //         document.getElementById('submit2').removeAttribute('disabled');
        //     }
        // });
    };
</script>