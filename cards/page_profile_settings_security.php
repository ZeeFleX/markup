<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-profile-settings security">
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
            <img src="images/logo.png" />
        </div>
        <p class="title">Метафорические Ассоциативные Карты<br/><span>Константина Довлатова</span></p>
        <div class="profile-snippet">
            <div class="photo-container">
                <img src="images/photos/01.jpg" />
            </div>
            <div class="info">
                <div class="name">Братанова Мария</div>
                <div class="job">Терапевт</div>
            </div>
            <div class="more-container">
                <i class="fa fa-caret-down"></i>
                <div class="dropdown-menu">
                    <ul>
                        <li class="arrow"></li>
                        <li><a href="#">Мой профиль</a></li>
                        <li><a href="#">Настройки профиля</a></li>
                        <li><a href="#">Выйти</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="wrapper">
        <section class="content">
            <h4>Настройки безопасности</h4>
            <div class="content-block">
                <form action="" method="POST">
                    <div class="field oldpassword required">
                        <label for="oldpassword">Старый пароль <span>*</span></label>
                        <input type="password" name="oldpassword" placeholder="Введите ваш пароль" />
                    </div>
                    <div class="clr"></div>
                    <div class="field newpassword required">
                        <label for="newpassword">Новый пароль <span>*</span></label>
                        <input type="password" name="newpassword" placeholder="Введите ваш пароль" />
                    </div>
                    <div class="field confirm-password required">
                        <label for="confirm-password">Подтвердите новый пароль <span>*</span></label>
                        <input type="password" name="confirm-password" placeholder="Введите ваш пароль" />
                    </div>
                    <input type="submit" value="Сохранить изменения" class="btn" />
                    <a href="#" class="btn ghost">Перейти в профиль</a>
                </form>
            </div>
        </section>
        <aside class="additional-menu">
            <h4>Настройки профиля</h4>
            <div class="content-block">
                <ul>
                    <li>
                        <a href="#">Основные настройки</a>
                    </li>
                    <li>
                        <a href="#">Контакты</a>
                    </li>
                    <li class="active">
                        <a href="#">Настройки безопасности</a>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
    <footer class="footer">
        <div class="top">
            <div class="footer-logo">
                <div class="logo">
                    <img src="images/footer-logo.png" />
                </div>
                <p class="title">Метафорические Ассоциативные Карты<br/><span>Константина Довлатова</span></p>
            </div>
            <div class="clr"></div>
            <p class="contact">ИП Довлатов Константин Николаевич<br />ОГРН 309774619400751</p>
            <p class="support">Служба технической поддержки: <a href="mailto:support@dowlatow.ru">support@dowlatow.ru</a></p>
        </div>
        <div class="bottom">
            <p>Copyright 2015 Карточный сервис</p>
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