<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-library">
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
    <div class="wrapper">
        <section class="search-article content-block">
            <form action="#" method="POST">
                <div class="left">
                    <div class="field string">
                        <input type="text" name="string" placeholder="Поиск..." class="allow-clear">
                    </div>
                    <div class="field category">
                        <select name="category" id="" class="select2">
                            <option value="0">Выберите категорию</option>
                            <option value="1">Растеневодство</option>
                        </select>
                    </div>
                    <div class="field author">
                        <select name="author" id="" class="select2">
                            <option value="0">Братанова Мария</option>
                            <option value="1">Евстигнеева Дарья</option>
                        </select>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="right">
                    <input type="submit" class="btn yellow">
                </div>
            </form>
        </section>
        <section class="write-article content-block">
            <div class="align-container">
                <div class="align-wrapper">
                    <h1>Внесите свой вклад в библиотеку!</h1>
                    <a href="#" class="btn">Добавить статью</a>
                </div>
            </div>
        </section>
        <section class="articles-flow">
            <?php for($i = 0; $i <= 10; $i++) { ?>
            <div class="article flow-item content-block">
                <div class="image">
                    <img src="images/interface/image-placeholder.png" alt="" />
                </div>
                <div class="content">
                    <h4 class="article-name">Название статьи</h4>
                    <p class="category">Категория: <span class="value">Проблемные адаптации</span></p>
                    <p class="author">Иван Иванов</p>
                    <p class="introtext">
                        Равным образом укрепление и развитие структуры позволяет выполнять важные задания по разработке системы обучения кадров...
                    </p>
                    <p class="date">Месяц назад</p>
                    <a href="#" class="btn ghost">Посмотреть</a>
                </div>
            </div>
            <?php } ?>
        </section>
    </div>
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