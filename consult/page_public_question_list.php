<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-public-question-list">
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
                    <li class="active">
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
        <section class="ask-question content-block">
            <a href="#" class="btn">Задать публичный вопрос</a>
            <h2>Хотите задать публичный вопрос консультантам?</h2>
        </section>
        <section class="search-questions">
            <div class="left">
                <h4>Поиск публичных вопросов</h4>
                <div class="content-block">
                    <select name="category" class="select2">
                        <option value="0">Выберите категорию вопроса</option>
                        <option value="1">Животноводство</option>
                    </select>
                </div>
            </div>
            <div class="right my-questions">
                <h4>Мои публичные вопросы</h4>
                <div class="content-block">
                    <a href="#" class="btn ghost">Показать мои публичные вопросы</a>
                </div>
            </div>
        </section>
        <section class="questions">
            <?php for($i = 0; $i <= 3; $i++) { ?>
            <?php //if($i % 2 == 0) echo '<div class="clr"></div>'; ?>
            <div class="question content-block">
                <div class="author">
                    <div class="photo-container">
                        <img src="images/photos/02.jpg" alt="">
                    </div>
                    <div class="container">
                        <p class="name">Иван Иванов</p>
                        <p class="job">Участник</p>
                        <p class="category">Категория: <span>Разрешение конфликтов</span></p>
                    </div>
                </div>
                <h4>Вопрос:</h4>
                <div class="question-content">
                    <div class="fader"></div>
                    <p>
                        Равным образом укрепление и развитие структуры позволяет выполнять важные задания по разработке системы обучения кадров, соответствует насущным потребностям. Идейные соображения выс...
                    </p>
                </div>
                <h4>Ответил: <span>Владимиров Владимир</span></h4>
                <div class="answer-content">
                    <div class="fader"></div>
                    <p>
                        Разнообразный и богатый опыт сложившаяся структура организации играет важную роль в формировании соответствующий условий активизации. Идейные соображения высшего порядка, а также сложившаяся структура организации обеспечивает широкому кругу (специалистов) участие в формировании позиций.
                    </p>
                </div>
                <a href="#" id="read-more">Посмотреть ответ полностью</a>
            </div>
            <?php } ?>
        </section>
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