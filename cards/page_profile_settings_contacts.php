<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-profile-settings contacts">
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
                        <li><a href="page_profile.php">Мой профиль</a></li>
                        <li><a href="page_profile_settings_common.php">Настройки профиля</a></li>
                        <li><a href="mainpage.php">Выйти</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mainmenu">
            <ul>
                <li>
                    <a href="page_list.php">Терапевты</a>
                </li>
            </ul>
        </div>
    </header>
    <div class="wrapper">
        <section class="content">
            <h4>Контакты</h4>
            <div class="content-block">
                <form action="" method="POST">
                    <div class="field email required">
                        <label for="email">Email <span>*</span></label>
                        <input type="text" class="allow-clear" name="email" placeholder="Введите ваш email" />
                    </div>
                    <div class="field phone">
                        <label for="phone">Телефон <span>*</span></label>
                        <input type="text"  class="allow-clear phone-mask" name="phone" placeholder="Введите ваш номер телефона" />
                    </div>
                    <div class="field skype required">
                        <label for="skype">Skype <span>*</span></label>
                        <input type="text" class="allow-clear" name="skype" placeholder="Введите ваш логин Skype" />
                    </div>
                    <div class="clr"></div>
                    <input type="submit" value="Сохранить изменения" class="btn" />
                    <a href="#" class="btn ghost red">Перейти в профиль</a>
                </form>
            </div>
        </section>
        <aside class="additional-menu">
            <h4>Настройки профиля</h4>
            <div class="content-block">
               <ul>
                    <li>
                        <a href="page_profile_settings_common.php">Основные настройки</a>
                    </li>
                    <li class="active">
                        <a href="page_profile_settings_about_me.php">Информация о себе</a>
                    </li>
                    <li>
                        <a href="page_profile_settings_contacts.php">Контакты</a>
                    </li>
                    <li>
                        <a href="page_profile_settings_security.php">Настройки безопасности</a>
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