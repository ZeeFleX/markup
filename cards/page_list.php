<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-list">
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
    <section class="list">
        <div class="wrapper">
            <div class="content-block search-user">
                <form action="#" method="GET">
                    <input type="text" class="allow-clear" placeholder="Введите Ф.И.О. терапевта" />
                    <input type="submit" class="btn red" value="Найти">
                </form>
            </div>
            <div class="search-results">
                <?php for($i = 0; $i < 13; $i++) { ?>

                <?php if($i % 4 == 0) { //Сброс флоата (если вдруг высота будет разной когда-нибудь)?>
                <div class="clr"></div>
                <?php } ?>

                <div class="result content-block <?php if($i % 4 == 0){echo 'first-of-row';} // Класс для первого элемента строки?>">
                    <div class="photo-container">
                        <a href="#">
                            <img src="images/interface/image-placeholder.png" alt="" />
                        </a>
                    </div>
                    <a href="#" class="username">
                        <span class="lastname">Иванов</span><br />
                        <span>Иван Иванович</span>
                    </a>
                </div>
                
                <?php } ?>
            </div>
        </div>
    </section>
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