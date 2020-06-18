
<div class="header" data-page="<?php echo $_SERVER['REQUEST_URI'] ?>">
    <div class="container">
        <div class="header-row">
            <div class="burger">
                <input id="menu__toggle" type="checkbox"/>
                <label class="menu__btn" for="menu__toggle">
                    <span></span>
                </label>
            </div>
            <a target="_blank" href="http://login.alfa-trans.ru/autoreg/" class="icon icon-user">user</a>
            <div class="logo-group" onclick="location.href = '/'">
                <img class="logo" src="/img/logo.svg" alt="АльфаТранс Безопасность">
                <div class="logo-text">
                    <img src="/img/logo-text.svg" alt="АльфаТранс Безопасность">
                </div>
            </div>
            <div class="contact-group">
                <a href="tel:+79517157710" class="icon icon-tel tel mr">+7 (951) <span class="bold">715-77-10</span></a>
                <a href="mailto:info@sklad-at.ru" class="icon icon-mail mail">info@sklad-at.ru</a>
            </div>
        </div>
    </div>

    <!-- nav -->
    <div class="nav" style="display: none;">
        <div class="nav-container">
            <div class="nav-logo" onclick="location.href = '/'">
                <img class="logo-red" src="/img/logo-red.svg" alt="АльфаТранс Безопасность">
                <div class="logo-text">
                    <img class="logo-text-red" src="/img/logo-text-red.svg" alt="АльфаТранс Безопасность">
                </div>
            </div>
            <ul class="nav-items active">
                <li class="nav-item dropdown page-active">
                    <div class="dropdown-title">
                        <a href="/" data-to="home">главная</a>
                        <div class="dropdown-select"></div>
                    </div>

                    <ul class="nav-iteams-home dropdown-list">
                        <li data-id="services" class="nav-item nav-section">
                            <a href="#services" data-to="services">услуги</a>
                        </li>
                        <li data-id="about" class="nav-item nav-section">
                            <a href="#about" data-to="about">о компании</a>
                        </li>
                        <li data-id="advantages" class="nav-item nav-section">
                            <a href="#advantages" data-to="advantages">преимущества</a>
                        </li>
                        <li data-id="working" class="nav-item nav-section">
                            <a href="#working" data-to="working">как мы работаем</a>
                        </li>
                        <li data-id="clients" class="nav-item nav-section">
                            <a href="#clients" data-to="clients">клиенты</a>
                        </li>
                        <li data-id="gallery" class="nav-item nav-section">
                            <a href="#gallery" data-to="gallery">галерея</a>
                        </li>
                        <li data-id="contacts" class="nav-item nav-section">
                            <a href="#contacts" data-to="contacts">контакты</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/storage">ответственное хранение</a>
                </li>
                <li class="nav-item">
                    <a href="/rent">аренда склада</a>
                </li>
            </ul>

            <div class="list-icons">
                <a href="tel:+79517157710" class="icon icon-nav-tel-blue tel">+7 (951) <span>715-77-10</span></a>
                <a href="mailto:info@sklad-at.ru" class="icon icon-nav-mail-blue">info@sklad-at.ru</a>

                <a target="_blank" href="http://login.alfa-trans.ru/autoreg/" class="icon icon-user-red"></a>
            </div>
        </div>
    </div>
</div>