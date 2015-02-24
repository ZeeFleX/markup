<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-mainpage common">
    <header class="header">
        <div class="logo"></div>
        <p class="title">Консультации</p>
        <a class="sign-in btn" id="sign-in" href="/">Войти</a>
        <ul class="mainmenu">
            <li><a href="#">Публичные вопросы</a></li>
            <li><a href="#">Консультанты</a></li>
            <li><a href="#">Библиотека</a></li>
        </ul>
    </header>
    <div class="content" style="height:1000px">
        <div class="wrapper"></div>
    </div>
    <div class="modal" id="authorization-window">
        <div class="container">
            <h1>Вход</h1>
            <div class="left">
                <a href="#" class="omni-sign-in" id="fb"><i class="fa fa-facebook"></i><span>Войти через Facebook</span></a>
                <a href="#" class="omni-sign-in" id="vk"><i class="fa fa-vk"></i><span>Войти через VKontakte</span></a>
                <a href="#" class="omni-sign-in" id="ok"><i class="fa fa-facebook"></i><span>Войти через Одноклассники</span></a>
            </div>
            <div class="right">
                <form action="">
                    <input type="text" name="email" placeholder="Ваш email" />
                    <input type="text" name="password" placeholder="Ваш пароль" />
                    <input type="submit" class="btn" value="Вход" />
                    <p>
                        Нажимая на кнопку «Вход» Вы подтверждаете согласие с <a href="#">Политикой конфиденциальности</a> и <a href="#">Условиями использования</a>
                    </p>
                </form>
            </div>
            <div class="clr"></div>
            <div class="links">
                <a class="sign-up" href="#">Создать <span>новый аккаунт</span></a>
                <br>
                <a href="#" class="forgot-password">Забыли пароль?</a>
            </div>
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