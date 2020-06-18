<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <link rel="shortcut icon" href="/favicon.png"/>
    <link rel="apple-touch-icon" href="/favicon.png">

    <title>Логистический комплекс Альфа Транс</title>
    <meta name="apple-mobile-web-app-title" content="Логистический комплекс Альфа Транс">
    <meta property="og:title" content="Логистический комплекс Альфа Транс"/>

    <meta name="description" content="Мы оптимизируем Вашу логистику!"/>
    <meta property="og:description" content="Мы оптимизируем Вашу логистику!"/>

    <meta property="og:image" content="/logo.png"/>
    <meta property="og:site_name" content='Логистический комплекс Альфа Транс'>
    <meta property="og:image:alt" content="Логистический комплекс Альфа Транс"/>
    <meta property="og:type" content="website"/>
    <meta name="twitter:card" content="summary_large_image">

    <meta name="google-site-verification" content="9UjDXIBNZCgzFql89FYMgXJgyP2IfSbK5Pl-r4sUP3g"/>

    <link href="https://fonts.googleapis.com/css2?family=Arsenal:wght@400;700&family=Comfortaa:wght@300;400;700&family=Montserrat+Alternates:wght@200;400;500&family=Roboto:wght@300;400;500&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="/js/owlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/desc.css">
    <link rel="stylesheet" href="/css/sub_desc.css">
    <link rel="stylesheet" href="/css/tablet.css">
    <link rel="stylesheet" href="/css/mobile.css">
    <link rel="stylesheet" href="/css/mobile-small.css">

    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
            async defer></script>
</head>
<body>
<div id="app" class="app">
    <!-- Header -->
    <?php
    include "header.php";
    ?>

    <!-- Content -->
    <div class="content">
        <div id="to-home"></div>
        <div id="home" class="section screen section-1 banner mb">
            <div class="section-label label-1" style="display: none;">
                <span class="number">01</span>
                <span class="name">Главная</span>
            </div>
            <div class="banner-text">
                <div class="text-container">
                    <h1 class="banner-title" style="display: none;">
                        Мы
                        <span class="text-blue">оптимизируем</span><br data-type="mobile">
                        Вашу логистику!
                    </h1>

                    <ul class="banner-list" style="display: none;">
                        <li>
                            <a class="link linkto" href="#" data-link="1">Ответственное хранение</a>
                        </li>
                        <li>
                            <a class="link linkto" href="#" data-link="2">Складская обработка</a>
                        </li>
                        <li>
                            <a class="link linkto" href="#" data-link="3">Операторство</a>
                        </li>
                        <li>
                            <a class="link linkto" href="#" data-link="4">Консалтинг</a>
                        </li>
                        <li>
                            <a class="link linkto" href="#" data-link="5">Система TopLog WMS</a>
                        </li>
                    </ul>

                    <button class="btn btn-red modal" style="display: none;">Отправить заявку</button>
                </div>
            </div>
            <div class="banner-img">
                <span id="linkto-services" class="linkto-services" data-type="mobile">К услугам</span>
                <button class="btn btn-red modal tablet">Отправить заявку</button>

                <img id="banner-img-home" class="photo-style" src="/img/sections/section-1/img-content.png?v=1"
                     style="display: none" alt="">
                <img class="photo-style" data-type="tablet" src="/img/sections/section-1/img-content-tablet.png?v=1"
                     alt="">
                <img class="photo-style" data-type="mobile" src="/img/sections/section-1/img-content-mobile.png?v=1"
                     alt="">

            </div>
            <div id="to-services"></div>
        </div>

        <div id="services" class="section screen section-2">
            <div class="section-label label-2">
                <span class="number">02</span>
                <span class="name">Услуги</span>
            </div>
            <div class="container">
                <div class="owl-carousel slider-about">

                    <div class="slide-about item-1">
                        <div class="title">Ответственное хранение</div>
                        <div class="picture">
                            <img class="img" src="/img/slider-about/img-1.svg" alt="">
                        </div>
                        <div class="text-group">
                            <ul class="list-icon rectangle no-icon">
                                <li>
                                    Качественная и количественная<br>
                                    сохранность груза с момента приёма<br>
                                    и до момента списания
                                </li>
                            </ul>
                            <a href="/storage" class="btn btn-red slide-about__btn" style="">Узнать подробнее</a>
                        </div>
                    </div>

                    <div class="slide-about item-2">
                        <div class="title">Складская обработка</div>
                        <div class="picture">
                            <img class="img" src="/img/slider-about/img-2.svg" alt="">
                        </div>
                        <div class="text-group">
                            <ul class="list-icon rectangle">
                                <li>
                                    Приём и размещение товара на склад
                                </li>
                                <li>
                                    Комплектация грузов перед отгрузкой
                                </li>
                                <li>
                                    Стикерование, маркировка и перемаркировка
                                </li>
                                <li>
                                    Инвентаризация
                                </li>
                                <li>
                                    Кроссдокинг
                                </li>
                                <li>
                                    Оперативный документооборот
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="slide-about item-3">
                        <div class="title">Операторство</div>
                        <div class="picture">
                            <img class="img" src="/img/slider-about/img-3.svg" alt="">
                        </div>
                        <div class="text-group">
                            <ul class="list-icon rectangle">
                                <li>
                                    Обработка данных
                                </li>
                                <li>
                                    Обмен данными с клиентом
                                </li>
                                <li>
                                    Составление отчетов
                                </li>
                                <li>
                                    Контроль персонала
                                </li>
                                <li>
                                    Оптимизация логистики склада
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="slide-about item-4">
                        <div class="title">Консалтинг</div>
                        <div class="picture">
                            <img class="img" src="/img/slider-about/img-4.svg" alt="">
                        </div>
                        <div class="text-group">
                            <ul class="list-icon rectangle">
                                <li>
                                    Профессиональная помощь в оптимизации складского пространства
                                </li>
                                <li>
                                    Автоматизация складских процессов
                                </li>
                                <li>
                                    Управление складским пространством
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="slide-about item-5">
                        <div class="title">Система TopLog WMS</div>
                        <div class="picture">
                            <img class="img" src="/img/slider-about/img-5.svg" alt="">
                        </div>
                        <div class="text-group">
                            <ul class="list-icon rectangle">
                                <li>
                                    TopLog WMS разработано на платформе 1С:Предприятие 8
                                </li>
                                <li>
                                    Поддержка стандартных складских операций
                                </li>
                                <li>
                                    Настройка стратегий выполнения складских операций на уровне всего склада и в
                                    разрезе характеристик номенклатуры
                                </li>
                                <li>
                                    Возможность использования ТСД на всех бизнес-процессах склада
                                </li>
                                <li>
                                    Настройка под отраслевую специфику склада (ответственное хранение, производство,
                                    дистрибуция, фармацевтика, продукты питания)
                                </li>
                                <li>
                                    Интеграция с корпоративными системами (SAP, Oracle, 1C 7.7, 1С 8, MS Dynamics…)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="to-about"></div>
        </div>

        <div id="about" class="section screen section-2">
            <div class="section-label label-3">
                <span class="number">03</span>
                <span class="name">О НАС</span>
            </div>
            <img class="section-2-img" data-type="desc" src="/img/sections/section-2/img-content.png" alt="">
            <img class="section-2-img" data-type="tablet" src="/img/sections/section-2/img-content-tablet.png" alt="">
            <img class="section-2-img" data-type="mobile" src="/img/sections/section-2/img-content-mobile.png" alt="">

            <div class="text-2-container">
                <div class="col-left">
                    <div class="text">
                        уже <span class="text-red text-bold"><b class="text_1">более</b> <b class="text_1">10 лет<b
                                        class="text-black">.</b></b></span>
                    </div>
                </div>
                <div class="col-right">
                    <h2 class="title">
                        Компания<br data-type="desc"> Альфа Транс
                    </h2>
                    <div class="text">
                        предоставляет услуги ответственного хранения
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-2-sub">
            <div class="cards">
                <div class="row-cards">
                    <div class="card">
                        <div class="title">
                            1500+
                        </div>
                        <div class="text">
                            обработанных заказов<br>в месяц
                        </div>
                    </div>

                    <div class="card">
                        <div class="title">
                            60+
                        </div>
                        <div class="text">
                            специалистов
                        </div>
                    </div>

                    <div class="card">
                        <div class="title">
                            100 000+
                        </div>
                        <div class="text">
                            обработанных единиц товара в месяц
                        </div>
                    </div>

                    <div class="card">
                        <div class="title">
                            28 000+
                        </div>
                        <div class="text">
                            <span class="text-red text-bold">кв. м.</span>
                            площадь хранения товарных партий
                        </div>
                    </div>
                </div>
            </div>

            <div class="description rectangle">
                <p>
                    Логистический оператор <span
                            class="text-blue">ООО «Альфа Транс Безопасность»</span> предлагает полный комплекс услуг по
                    ответственному хранению товаров на собственном складском терминале, расположенном в 8 км от
                    федеральной автомобильной дороги М1 «Беларусь».
                </p>
                <p>
                    Логистический комплекс оснащён автоматизированной системой учёта складских остатков и управления
                    складом, адресной системой хранения товаров, стеллажным оборудованием, современной погрузочной
                    техникой.
                </p>
                <p>
                    Скорость, качество и стоимость наших услуг – это гарантия высокого конкурентного преимущества наших
                    партнеров за счет оптимизации и снижении затрат на складскую логистику.
                </p>
                <p>
                    Мы предлагаем нашим клиентам услуги ответственного хранения товаров на высочайшем профессиональном
                    уровне <span class="text-medium">24/7 без перерывов и выходных</span>!
                </p>
                <p>
                    За нас говорят <span class="text-red">более 10 лет безупречной работы</span> на рынке логистических
                    услуг!
                </p>
            </div>
            <div id="to-advantages"></div>
        </div>

        <div id="advantages" class="section screen section-3">
            <div class="section-label label-4">
                <span class="number">04</span>
                <span class="name">ПРЕИМУЩЕСТВА</span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-left">
                        <img class="img-marker" src="/img/icon/marker.png" alt="">
                        <h3>Рядом с Логистическим комплексом находится:</h3>
                        <ul class="list-icon">
                            <li>
                                таможенный терминал общей компетенции;
                            </li>
                            <li>
                                акцизный терминал;
                            </li>
                            <li>
                                пункт фитосанитарного и ветеринарного контроля;
                            </li>
                            <li>
                                лицензированный таможенный брокер
                            </li>
                        </ul>
                    </div>
                    <div class="col-right">
                        <img src="/img/sections/section-3/img-content.jpg?v=1" data-type="desc" alt="">
                        <img src="/img/sections/section-3/img-content-tablet.jpg?v=1" data-type="tablet" alt="">
                        <div class="row center">
                            <a target="_blank" href="http://alfa-trans.ru/" class="btn btn-red">узнать больше</a>
                            <div class="description">
                                о группе компаний <span class="text-medium">Альфа Транс</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-4 mb">
            <div class="container">
                <ul>
                    <li>
                        <img src="/img/sections/section-4/ico-1.svg" alt="">
                        <div class="text">
                            Маркировка, стикеровка, переупаковка груза
                        </div>
                    </li>

                    <li>
                        <img src="/img/sections/section-4/ico-2.svg" alt="">
                        <div class="text">
                            Высокая скорость<br> обработки заказов
                        </div>
                    </li>

                    <li>
                        <img src="/img/sections/section-4/ico-3.svg" alt="">
                        <div class="text">
                            Подбор и комплектация заказов от 1 единицы
                        </div>
                    </li>

                    <li>
                        <img src="/img/sections/section-4/ico-4.svg" alt="">
                        <div class="text">Партнерский автоперевозчик по России и странам Европы</div>
                    </li>

                    <li>
                        <img src="/img/sections/section-4/ico-5.svg" alt="">
                        <div class="text">
                            Услуги по организации доставки грузов от жд станции «Смоленск» (170108)
                        </div>
                    </li>

                    <li>
                        <img src="/img/sections/section-4/ico-6.svg" alt="">
                        <div class="text">
                            Режим работы склада<br>
                            <span>365/24</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="to-working"></div>
        </div>

        <div class="section section-5 mb">
            <div class="section-label label-5">
                <span class="number">05</span>
                <span class="name">КАК МЫ РАБОТАЕМ</span>
            </div>
            <div class="container">
                <div class="steps">
                    <div class="item-step">
                        <div class="picture">
                            <img src="/img/sections/section-5/1.svg" alt="">
                        </div>
                        <div class="title">Заявка</div>
                        <div class="description">
                            Вы оставляете заявку на<br> сайте или по телефону
                        </div>
                    </div>

                    <div class="item-step">
                        <div class="picture">
                            <img src="/img/sections/section-5/2.svg" alt="">
                        </div>
                        <div class="title">Подбор условий</div>
                        <div class="description">
                            Мы подбираем для вас<br> оптимальное предложение
                        </div>
                    </div>

                    <div class="item-step">
                        <div class="picture">
                            <img src="/img/sections/section-5/3.svg" alt="">
                        </div>
                        <div class="title">Договор</div>
                        <div class="description">
                            Заключаем договор с<br> указанием всех деталей
                        </div>
                    </div>

                    <div class="item-step">
                        <div class="picture">
                            <img src="/img/sections/section-5/4.svg" alt="">
                        </div>
                        <div class="title">Доставка на склад</div>
                        <div class="description">
                            Организуем доставку<br> груза до нашего склада
                        </div>
                    </div>

                    <div class="item-step">
                        <div class="picture">
                            <img src="/img/sections/section-5/5.svg" alt="">
                        </div>
                        <div class="title">Ответственное хранение</div>
                        <div class="description">
                            Размещаем товар на<br> ответственном хранении
                        </div>
                    </div>

                    <div class="item-step">
                        <div class="picture">
                            <img src="/img/sections/section-5/6.svg" alt="">
                        </div>
                        <div class="title">Финальная доставка</div>
                        <div class="description">
                            Мы осуществляем доставку<br data-type="mobile"> груза<br data-type="desc"> по указанному
                            адресу<br data-type="mobile"> и времени
                        </div>
                    </div>
                    <div class="line-1"></div>
                    <div class="line-1-hide"></div>
                    <div class="line-2"></div>
                    <div class="line-2-hide"></div>
                    <div class="line-2-1-hide"></div>
                    <div class="line-2-2-hide"></div>
                    <div class="line-3" data-type="mobile"></div>
                </div>
            </div>
            <div id="to-clients"></div>
        </div>

        <div class="section section-6">
            <div class="section-label label-6">
                <span class="number">06</span>
                <span class="name">КЛИЕНТЫ И ПАРТНЕРЫ</span>
            </div>
            <div class="container">
                <div id="clients" class="owl-carousel clients">
                    <div class="client">
                        <img class="logo-1" src="/img/clients/logo-1.png" alt="">
                    </div>
                    <div class="client">
                        <img class="logo-2" src="/img/clients/logo-2.png" alt="">
                    </div>
                    <div class="client">
                        <img class="logo-3" src="/img/clients/logo-3.png" alt="">
                    </div>
                    <div class="client">
                        <img class="logo-4" src="/img/clients/logo-4.png" alt="">
                    </div>
                </div>
            </div>
            <div id="to-gallery"></div>
        </div>

        <div id="gallery-section" class="section gallery mb">
            <div class="section-label label-7">
                <span class="number">07</span>
                <span class="name">Галерея</span>
            </div>
            <div id="gallery-slider" class="gallery-slider">
                <div class="nav-slider">
                    <div class="prev"></div>
                    <div class="next"></div>
                </div>

                <div class="items"></div>
            </div>
            <div id="to-contacts"></div>
        </div>

        <div id="contacts" class="section screen section-7">
            <div class="section-label label-8">
                <span class="number">08</span>
                <span class="name">КОНТАКТЫ</span>
            </div>
            <div class="container">
                <h3>
                    Наши контакты<br>
                </h3>
                <p class="sub-title">ООО "Альфа Транс Безопасность"</p>

                <div class="contacts">
                    <div class="col-right">
                        <a href="#" class="icon icon-map-blue address">
                            Смоленская обл., Смоленский район,<br>
                            д. Стабна, ул. Заозёрная, д. 35<br>
                            214550, Россия
                        </a>
                        <br>
                        <br>
                        <br>
                        <p class="address text-center">
                            ИНН 6714031485, ОГРН 1106714001020
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="map-container" class="section section-8 map-container">
            <iframe id="map" src="https://snazzymaps.com/embed/233723" width="100%" height="100%" scrolling="no"
                    seamless="seamless"></iframe>
        </div>

        <div class="section section-9">
            <div class="container">
                <form id="form-stat" class="form form-stat">
                    <input type="hidden" name="form" value="stat">
                    <div class="form-group group-input">
                        <input name="nik" type="text" placeholder="Имя*" required>
                    </div>
                    <div class="form-group group-input">
                        <input name="theme" type="text" placeholder="Тема">
                    </div>
                    <div class="form-group group-input">
                        <input name="mail" type="email" placeholder="E-Mail*" required>
                    </div>
                    <div class="form-group group-textarea">
                        <textarea name="message" placeholder="Ваше сообщение*"></textarea>
                    </div>
                    <div class="form-group group-checkbox">
                        <label for="check-stat">
                            <input id="check-stat" name="check" type="checkbox" value="1" required>
                            <span>Я даю согласие на обработку моих персональных данных</span>
                        </label>
                    </div>

                    <div class="form-group group-captcha">
                        <div class="captcha">
                            <div id="my-captha"></div>
                        </div>
                    </div>

                    <div class="form-group group-buttons">
                        <span class="btn btn-gray">отмена</span>
                        <button id="submit" disabled="disabled" class="btn btn-red">отправить</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="section section-10">
            <div class="container">
                <h3>
                    Карьера в ООО "Альфа Транс Безопасность"
                </h3>

                <a target="_blank" href="http://alfa-trans.ru/" class="link">Хотите у нас работать?</a>

                <div class="row">
                    <div class="col-left">
                        <p>
                            Пожалуйста, отправьте резюме и
                            сопроводительное письмо по адресу:
                        </p>
                        <a href="mailto:jobs@sklad-at.ru" class="icon icon-mail-red mail">jobs@sklad-at.ru</a>
                    </div>
                    <div class="col-right">
                        <p>
                            или
                            позвоните нам по номеру:
                        </p>
                        <a href="tel:+79517157710" class="icon icon-tel-red tel"> +7 (920) <span
                                    class="bold">310-89-00</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end content -->
</div> <!-- app end -->

<?php
include "footer.php";
?>

</body>
</html>

