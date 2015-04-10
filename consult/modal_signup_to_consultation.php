<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template">
    <div class="window sign-up-consultation">
        <div class="container">
            <i class="fa fa-close"></i>
            <h1>Запись на консультацию</h1>
            <h5>Ваш консультант</h5>
            <div class="profile">
                <div class="photo-container">
                    <img src="images/photos/01.jpg" alt="">
                </div>
                <div class="about">
                    <div class="rating-block">
                        <p class="value"><span class="current-value">8</span>/10</p>
                        <p class="title"><span>Рейтинг</span></p>
                    </div>
                    <p class="name">
                        <span class="lastname">Братанова</span><br />
                        <span class="firstname">Мария Петровна</span>
                    </p>
                    <p class="job">Консультант <span class="age">35 лет</span></p>
                </div>
            </div>
            <form action="#" method="POST">
                <div class="left">
                    <h5>Выберите способ</h5>
                    <div class="field method">
                        <select name="method" class="select2">
                            <option value="private">Личная консультация</option>
                            <option value="skype">Онлайн консультация (Skype)</option>
                            <option value="cards">Метафорические карты</option>
                        </select>
                    </div>
                    <h5>Выберите дату консультации</h5>
                    <div class="calendar">
                        <header>
                            <a href="#"><i class="fa fa-angle-double-left"></i></a>
                            <a href="#"><i class="fa fa-angle-double-right"></i></a>
                            <p class="month">Январь</p>
                            <div class="clr"></div>
                        </header>
                        <div class="container">
                            <section class="day-of-weeks">
                                <div class="item">Пн</div>
                                <div class="item">Вт</div>
                                <div class="item">Ср</div>
                                <div class="item">Чт</div>
                                <div class="item">Пт</div>
                                <div class="item">Сб</div>
                                <div class="item">Вс</div>
                            </section>
                            <section class="day-of-month">
                                <?php
                                    $offset = 2;
                                    $today = 27;
                                    for($i = 1; $i <= $offset; $i++) {
                                ?>
                                    <span class="item <?php echo 'empty'; ?> <?php if($offset % 7 == 6 || $offset % 7 == 0) echo 'weekend'; ?> "></span>
                                <?php } ?>
                                <?php for($i = 1; $i <= 31; $i++) {?>
                                    <a href="#" class="item <?php if(($i + $offset) % 7 == 6 || ($i + $offset) % 7 == 0) echo 'weekend'; ?> <?php if($i == $today) echo 'today'; ?>"><?php echo $i; ?></a>
                                <?php } ?>
                                <div class="clr"></div>
                            </section>
                        </div>
                    </div>
                    <h5>Длительность консультации</h5>
                    <div class="time-slider">
                        <div class="bar">
                            <div class="handler"></div>
                        </div>
                        <div class="labels">
                            <div class="label">30 мин</div>
                            <div class="label">1 час</div>
                            <div class="label">1,5 часа</div>
                            <div class="label">2 часа</div>
                        </div>
                    </div>
                    <h5>Стоимость консультации</h5>
                    <p class="price">
                        <span class="value">3000</span> <i class="fa fa-ruble"></i>
                    </p>

                </div>
                <div class="right">
                    <h5>Время</h5>
                    <div class="time-container">
                        <div class="grid">
                            <div class="row">00:00 - 00:30</div>
                            <div class="row">00:30 - 01:00</div>
                            <div class="row">01:00 - 01:30</div>
                            <div class="row">02:00 - 02:30</div>
                            <div class="row">03:00 - 03:30</div>
                            <div class="row">04:00 - 04:30</div>
                            <div class="row">05:00 - 05:30</div>
                            <div class="row">06:00 - 06:30</div>
                            <div class="row">07:00 - 07:30</div>
                            <div class="row">08:00 - 08:30</div>
                            <div class="row">00:30 - 01:00</div>
                            <div class="row">00:30 - 01:00</div>
                            <div class="row">00:30 - 01:00</div>
                            <div class="row">00:30 - 01:00</div>
                            <div class="row">00:30 - 01:00</div>
                            <div class="row">00:30 - 01:00</div>
                            <div class="row">00:30 - 01:00</div>
                        </div>
                    </div>
                </div>
                <div class="clr"></div>
                <input type="submit" value="Записаться на консультацию"  class="btn"/>
                <a href="#" class="btn ghost">Отменить</a>
            </form>
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