<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-session-manage">
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
    <section class="content">
        <div class="wrapper">
            <div class="content-block filter">
                <div class="stat">
                    <p class="created">Создано новых сессий: <span class="value">8</span></p>
                    <p class="finished">Сессий проведено: <span class="value">80</span></p>
                </div>
            </div>
            <div class="sessions">
                <?php for($i = 1; $i <= 4; $i++) { ?>
                    <div class="item active">
                        <h4>Сессия №153</h4>
                        <div class="content-block">
                            <p class="invite-sent">
                                Приглашение отправлено на адрес:<br />
                                <span class="italic">example@mail.com</span><br />
                                <span class="date">
                                    14:12, 10.02.2015
                                </span>
                            </p>
                            <form action="#" method="POST">
                                <input type="text" placeholder="Введите email" name="email" autocomplete="off"/>
                                <input type="submit" class="btn ghost red" value="Отправить повторно" />
                            </form>
                            <div class="separator"></div>
                            <p class="session-begin">Начало сессии: <span class="value">17:30, 28.02.2015</span></p>
                            <a href="#" class="cancel">Отменить</a>
                            <a href="#" class="btn sign-in">Войти в сессионную комнату</a>
                        </div>
                    </div>
                    <?php if($i % 3 == 0) echo '<div class="clr"></div>'; ?>
                <?php } ?>
                <div class="item invitation">
                    <h4>Сессия №165</h4>
                    <div class="content-block">
                        <form action="#" method="POST">
                            <label for="date">Дата</label>
                            <input type="text" class="datepicker" name="date" placeholder="Введите дату сессии" />
                            <label for="time">Время</label>
                            <input type="text" class="timepicker" name="time" placeholder="Введите время" />
                            <input type="text" placeholder="Введите email" name="email" autocomplete="off"/>
                            <input type="submit" class="btn ghost red" value="Отправить приглашение" />
                        </form>
                    </div>
                </div>
                <div class="item new-session">
                    <h4>Новая сессия</h4>
                    <a href="#" class="content-block">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                </div>
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