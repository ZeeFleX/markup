<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-consultant-list">
    <NOSCRIPT>
        <div class="no-script-layout">
            <div class="wrapper">
                <h1>В настройках вашего браузера отключен JavaScript.</h1>
                <h2>Чтобы продолжить пользоваться сайтом вам необходимо активировать JavaScript в настройках или скачать современный браузер.</h2>
            </div>
        </div>        
    </NOSCRIPT>
    <header class="header">
        <div class="logo"></div>
        <p class="title">Консультации</p>
        <a class="sign-in btn" href="/">Войти</a>
        <ul class="mainmenu">
            <li><a href="#">Публичные вопросы</a></li>
            <li><a href="#">Консультанты</a></li>
            <li><a href="#">Библиотека</a></li>
        </ul>
    </header>
    <section class="user-menu-section">
        <div class="wrapper">
            <div class="user-menu-container">
                <ul class="user-menu">
                    <li>
                        <a href="#">Мое расписание</a>
                    </li>
                    <li>
                        <a href="#">Мои клиенты</a>
                    </li>
                    <li>
                        <a href="#">Личные вопросы</a>
                    </li>
                    <li>
                        <a href="#">Мои уведомления</a>
                    </li>
                    <li>
                        <a href="#">Написать статью</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="wrapper">
        <section class="content-block search-consultant">
            <h3>Найдите вашего консультанта</h3>
            <form action="#" id="search-consultant" method="POST">
                <div class="field special">
                    <select name="special" class="select2">
                        <option value="0">Выберите специализацию</option>
                        <option value="1">Животноводство</option>
                    </select>
                </div>
                 <div class="field city">
                    <select name="city" class="select2">
                        <option value="0">Москва</option>
                        <option value="1">Санкт-Петербург</option>
                    </select>
                </div>
                <input type="submit" class="btn yellow" value="Найти" />
            </form>
        </section>
        <div class="search-results">
            <?php for($i = 0; $i < 13; $i++) { ?>

            <?php if($i % 4 == 0) { //Сброс флоата (если вдруг высота будет разной когда-нибудь)?>
            <div class="clr"></div>
            <?php } ?>

            <div data-id="<?php echo $i; ?>" class="result content-block <?php if($i % 4 == 0){echo 'first-of-row';} // Класс для первого элемента строки?>">
                <div class="photo-container">
                    <a href="#">
                        <img src="images/photos/01.jpg" alt="" />
                    </a>
                </div>
                <a href="#" class="username">
                    <span class="lastname">Иванов</span><br />
                    <span>Иван Иванович</span>
                </a>
                <div class="rating-block">
                    <p class="value"><span class="current-value">8</span>/10</p>
                    <p class="title"><span>Рейтинг</span></p>
                </div>
                <a href="#" class="btn" id="sign-up-to-consult">Запись на консультацию</a>
            </div>
            
            <?php } ?>
        </div>
    </section>
    <footer class="footer">
        <section class="library">
            <div class="wrapper">
                <div class="title">
                    <h3>Консультации</h3>
                </div>
                <div class="library-list">
                    <h4>Библиотека</h4>
                    <div class="items-container">
                        <a class="item" href="#">Проблемные адаптации</a>
                        <a class="item" href="#">Развитие способностей</a>
                        <a class="item" href="#">Послеродовая адаптация</a>
                        <a class="item" href="#">Личностное развитие</a>
                        <a class="item" href="#">Развитие карьеры</a>
                        <a class="item" href="#">Проблемы с памятью</a>
                        <a class="item" href="#">Возрастные кризисы</a>
                        <a class="item" href="#">Отказ от курения</a>
                        <a class="item" href="#">Управление весом</a>
                        <a class="item" href="#">Самореализация</a>
                        <a class="item" href="#">Проблема сна</a>
                        <a class="item" href="#">Тревоги и фобии</a>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
        </section>
        <section class="bottom">
            <p class="copyright">Copyright 2015 Консультации</p>
            <ul class="footer-menu">
                <li>
                    <a href="#">О сервисе</a>
                </li>
                <li>
                    <a href="#">Политика конфиденциальности</a>
                </li>
                <li>
                    <a href="#">Условия использования</a>
                </li>
                <li>
                    <a href="#">Оферта</a>
                </li>
            </ul>
        </section>
    </footer>
</body>
</html>