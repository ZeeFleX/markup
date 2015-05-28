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
                    <h5>Офис проведения консультации</h5>
                    <p class="place"><i class="fa fa-map-marker"></i> Москва, пер. Святошинский, 32</p>
                    <h5>Стоимость консультации</h5>
                    <p class="price">
                        <span class="value">3000</span> <i class="fa fa-ruble"></i>
                    </p>

                </div>
                <div class="right">
                    <div class="time-container">
                        <div class="grid">
                            <div class="row unwork" data-time="1">00:00 - 00:30</div>
                            <div class="row unwork" data-time="2">00:30 - 01:00</div>
                            <div class="row unwork" data-time="3">01:00 - 01:30</div>
                            <div class="row unwork" data-time="4">01:30 - 02:00</div>
                            <div class="row unwork" data-time="5">02:00 - 02:30</div>
                            <div class="row unwork" data-time="6">02:30 - 03:00</div>
                            <div class="row unwork" data-time="7">03:00 - 03:30</div>
                            <div class="row unwork" data-time="8">03:30 - 04:00</div>
                            <div class="row unwork" data-time="9">04:00 - 04:30</div>
                            <div class="row unwork" data-time="10">04:30 - 05:00</div>
                            <div class="row" data-time="11">05:00 - 05:30</div>
                            <div class="row" data-time="12">05:30 - 06:00</div>
                            <div class="row" data-time="13">06:00 - 06:30</div>
                            <div class="row" data-time="14">06:30 - 07:00</div>
                            <div class="row" data-time="15">07:30 - 07:30</div>
                            <div class="row reserved" data-time="16">07:30 - 08:00</div>
                            <div class="row reserved" data-time="17">08:00 - 08:30</div>
                            <div class="row reserved" data-time="18">08:30 - 09:00</div>
                            <div class="row reserved" data-time="19">09:00 - 09:30</div>
                            <div class="row reserved" data-time="20">09:30 - 10:00</div>
                            <div class="row reserved" data-time="21">10:00 - 10:30</div>
                            <div class="row reserved" data-time="22">10:30 - 11:00</div>
                            <div class="row reserved" data-time="23">11:00 - 11:30</div>
                            <div class="row reserved" data-time="24">11:30 - 12:00</div>
                            <div class="row" data-time="25">12:00 - 12:30</div>
                            <div class="row" data-time="26">12:30 - 13:00</div>
                            <div class="row" data-time="27">13:00 - 13:30</div>
                            <div class="row" data-time="28">13:30 - 14:00</div>
                            <div class="row" data-time="29">14:00 - 14:30</div>
                            <div class="row" data-time="30">14:30 - 15:00</div>
                            <div class="row" data-time="31">15:00 - 15:30</div>
                            <div class="row reserved" data-time="32">15:30 - 16:00</div>
                            <div class="row reserved" data-time="33">16:00 - 16:30</div>
                            <div class="row reserved" data-time="34">16:30 - 17:00</div>
                            <div class="row reserved" data-time="35">17:00 - 17:30</div>
                            <div class="row" data-time="36">17:30 - 18:00</div>
                            <div class="row" data-time="37">18:00 - 18:30</div>
                            <div class="row" data-time="38">18:30 - 19:00</div>
                            <div class="row" data-time="39">19:00 - 19:30</div>
                            <div class="row" data-time="40">19:30 - 20:00</div>
                            <div class="row" data-time="41">20:00 - 20:30</div>
                            <div class="row" data-time="42">20:30 - 21:00</div>
                            <div class="row" data-time="43">21:00 - 21:30</div>
                            <div class="row" data-time="44">21:30 - 22:00</div>
                            <div class="row" data-time="45">22:00 - 22:30</div>
                            <div class="row" data-time="46">22:30 - 23:00</div>
                            <div class="row" data-time="47">23:00 - 23:30</div>
                            <div class="row" data-time="48">23:30 - 00:00</div>
                        </div>
                    </div>
                </div>
                <div class="clr"></div>
                <input type="submit" value="Записаться на консультацию"  class="btn"/>
                <a href="#" class="btn ghost" id="cancel">Отменить</a>
                
            </form>
            <p class="endnote">
                Не удалось выбрать удобное время? <a href="#">Оставьте заявку.</a> Консультант свяжется с вами в ближайшее время.
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