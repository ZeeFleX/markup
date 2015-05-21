<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template">
    <div class="window sign-up-consultation light">
        <div class="container">
            <i class="fa fa-close"></i>
            <h1>Заявка на консультацию</h1>
            <h5>Ваш консультант</h5>
            <div class="profile">
                <div class="photo-container">
                    <img src="images/photos/01.jpg" alt="">
                </div>
                <div class="about">
                    <p class="name">
                        <span class="lastname">Братанова</span><br />
                        <span class="firstname">Мария Петровна</span>
                    </p>
                    <p class="job">Консультант <span class="age">35 лет</span></p>
                    <div class="rating-block">
                        <p class="value"><span class="current-value">8</span>/10</p>
                        <p class="title"><span>Рейтинг</span></p>
                    </div>
                </div>
            </div>
            <form action="#">
                <h5>Тип консультации</h5>
                <select name="type" class="select2" placeholder="Выберите тип консультации">
                    <option value="private">Личная встреча</option>
                    <option value="online">Skype-консультация</option>
                    <option value="online">Online-кабинет</option>
                </select>
                <h5>Комментарий к заявке</h5>
                <textarea name="comment" class="allow-clear" placeholder="Напишите комментарий к заявке"></textarea>
                <input type="submit" class="btn" value="Отправить заявку" />
                <a href="#" class="btn ghost">Отменить</a>
            </form>
            
            <p class="endnote">
                Хотите записаться на консультацию в определенное время?<br />Перейдите на <a href="#">форму записи на консультацию</a>.
            </p>
        </div>
    </div>
    <NOSCRIPT>
        <div class="no-script-layout">
            <div class="wrapper">
                <h1>В настройках вашего браузера отключен JavaScript.</h1>
                <h2>Чтобы продолжить пользоваться сайтом вам необходимо активировать JavaScript в настройках или скачать современный браузер.</h2>
            </div>
        </div>        
    </NOSCRIPT>
    <header class="header">
        <div class="logo">
            <img src="images/logo.png" alt="">
        </div>
        <div class="project-name">
             <p class="title">Психолог для Вас</p>
             <p class="author">Проект Константина Довлатова</p>
        </div>
       
        <a class="sign-in btn" id="sign-in" href="/">Войти</a>
        <ul class="mainmenu">
            <li><a href="#">Публичные вопросы</a></li>
            <li><a href="#">Консультанты</a></li>
            <li><a href="#">Библиотека</a></li>
        </ul>
    </header>
    <div class="content" >
        <div class="wrapper" style="height:800px">
            
        </div>
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
            <p class="copyright">Copyright 2015 Психолог для Вас</p>
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