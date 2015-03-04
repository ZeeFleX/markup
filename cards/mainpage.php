<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-mainpage common">
    <NOSCRIPT>
        <div class="no-script-layout">
            <div class="wrapper">
                <h1>В настройках вашего браузера отключен JavaScript.</h1>
                <h2>Чтобы продолжить пользоваться сайтом вам необходимо активировать JavaScript в настройках или скачать современный браузер.</h2>
            </div>
        </div>        
    </NOSCRIPT>
    <div class="content">
        <div class="wrapper">
            <h1>Метафорические карты</h1>
            <h4>Индивидуальные онлайн консультации</h4>
            <div class="log-in" id="authorization-window">
                <div class="head">
                </div>
                <form class="body" action="#" method="POST">
                    <div class="field email">
                        <input type="text" name="email" placeholder="Email" />
                    </div>
                    <div class="field password">
                        <input type="password" name="password" placeholder="Введите ваш пароль" />
                    </div>
                    <input type="submit" class="btn" value="Войти" />
                    <p class="endnote">
                        Нажимая на кнопку «Войти» Вы соглашаетесь с 
                        <a href="#">Политикой конфиденциальности</a>
                        и <a href="#">Условиями пользования сайтом</a>
                    </p>
                    <div class="clr"></div>
                    <div class="field remember-me">
                        <input type="checkbox" name="remember-me" />
                        <label for="remember-me">Запомнить меня</label>
                    </div>
                    <a href="#" id="forgot-password">Забыли пароль?</a>
                    <div class="clr"></div>
                </form>
                <div class="foot">
                    <p>Не зарегистрированы?</p>
                    <a href="#" id="sign-up">Пройдите регистрацию</a>
                </div>
            </div>
            <div class="sign-up" id="registration-window">
                <div class="head">
                </div>
                <form class="body" action="#" method="POST">
                    <div class="field email">
                        <input type="text" name="email" placeholder="Email" />
                    </div>
                    <div class="field password">
                        <input type="password" name="password" placeholder="Введите ваш пароль" />
                    </div>
                    <div class="field confirm-password">
                        <input type="password" name="confirm-password" placeholder="Подтвердите ваш пароль" />
                    </div>
                    <input type="submit" class="btn" value="Зарегистрироваться" />
                    <p class="endnote">
                        Регистрируясь Вы подтверждаете согласие с
                        <a href="#">Политикой конфиденциальности</a>
                        и <a href="#">Условиями пользования сайтом</a>
                    </p>
                    <div class="clr"></div>
                </form>
                <div class="foot">
                    <p>Уже зарегистрированы?</p>
                    <a href="#" id="sign-in">Войдите</a>
                </div>
            </div>
            <div class="forgot-password" id="forgot-password-window">
                <div class="head">
                </div>
                <form class="body" action="#" method="POST">
                    <div class="field email">
                        <input type="text" name="email" placeholder="Email" />
                    </div>
                    <input type="submit" class="btn" value="Восстановить пароль" />
                </form>
                <div class="foot">
                    <p>Вспомнили пароль?</p>
                    <a href="#" id="sign-in">Войдите</a>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="copyright">
            <p>ИП Довлатов Константин Николаевич<br />ОГРН 309774619400751</p>
            <p>Copyright 2015 Карточный сервис</p>
        </div>
        <div class="right">
            <p>Служба технической поддержки: <a href="mailto:support@dowlatow.ru">support@dowlatow.ru</a></p>
            <ul class="footer-menu">
                <li><a href="#">О сервисе</a></li>
                <li><a href="#">Политика конфиденциальности</a></li>
                <li><a href="#">Условия пользования сайтом</a></li>
                <li><a href="#">Оферта</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>