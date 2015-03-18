<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-profile-schedule">
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
        <div class="profile-snippet">
            <div class="photo-container">
                <img src="images/photos/01.jpg" />
            </div>
            <div class="info">
                <div class="name">Иванов Иван</div>
                <div class="job">Консультант</div>
            </div>
            <div class="more-container">
                <i class="fa fa-caret-down"></i>
                <div class="dropdown-menu">
                    <ul>
                        <a href="#">Выйти</a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="profile-notifications">
            <div class="events active">
                <div class="count">3</div>
                <i class="fa fa-calendar"></i>
            </div>
            <div class="new-messages">
                <div class="count">2</div>
                <i class="fa fa-envelope"></i>
            </div>
            <div class="new-notifications">
                <div class="count">2</div>
                <i class="fa fa-bell"></i>
            </div>
        </div>
    </header>
    <section class="user-menu-section">
        <div class="wrapper">
            <div class="user-menu-container">
                <ul class="user-menu">
                    <li>
                        <a href="#">Мое расписание</a>
                    </li>
                    <li>
                        <a href="#">Мои консультации</a>
                    </li>
                    <li>
                        <a href="#">Мои клиенты</a>
                    </li>
                    <li>
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
    <div class="wrapper">
        <section class="content">
            <div class="content-block day">
                <div class="day-container">
                    <div class="day-choose">
                        <a href="#" class="arrow left"><i class="fa fa-chevron-left"></i></a>
                        <a href="#" class="arrow right"><i class="fa fa-chevron-right"></i></a>
                        <p><a href="#"><span class="date">9 января, 2015</span> <span class="day-of-week">Пятница</span></a></p>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
            <div class="content-block calendars">
                <i class="close fa fa-close"></i>
                <a href="#" id="today" class="btn ghost">Сегодня</a>
                <div class="months">
                    <div class="month">
                        <header>
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
                                    <a href="#" class="item <?php if(in_array($i, Array(4,8,15,17,18,24,25))) echo 'skype'; ?> <?php if(in_array($i, Array(3,16,21))) echo 'private'; ?> <?php if(($i + $offset) % 7 == 6 || ($i + $offset) % 7 == 0) echo 'weekend'; ?> <?php if($i == $today) echo 'today'; ?>"><?php echo $i; ?></a>
                                <?php } ?>
                                <div class="clr"></div>
                            </section>
                        </div>
                    </div>
                    <div class="month">
                        <header>
                            <p class="month">Февраль</p>
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
                                    $offset = 4;
                                    $today = 27;
                                    for($i = 1; $i <= $offset; $i++) {
                                ?>
                                    <span class="item <?php echo 'empty'; ?> <?php if($offset % 7 == 6 || $offset % 7 == 0) echo 'weekend'; ?> "></span>
                                <?php } ?>
                                <?php for($i = 1; $i <= 31; $i++) {?>
                                    <a href="#" class="item <?php if(in_array($i, Array(1,6,15,11,25))) echo 'skype'; ?> <?php if(in_array($i, Array(8,17,21))) echo 'private'; ?> <?php if(($i + $offset) % 7 == 6 || ($i + $offset) % 7 == 0) echo 'weekend'; ?> <?php if($i == $today) echo 'today'; ?>"><?php echo $i; ?></a>
                                <?php } ?>
                                <div class="clr"></div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="controls">
                    <a href="#" class="fa fa-chevron-left left"></a>
                    <a href="#" class="fa fa-chevron-right right"></a>
                </div>
            </div>
            <div class="schedule">
                <h4>Расписание</h4>
                <div class="schedule-container content-block">
                    <div class="elements">
                        <div class="full-day field">
                            <input type="checkbox" name="full-day" checked="checked" />
                            <label for="full-day">Показать полные сутки</label>
                        </div>
                        <div class="field weekend">
                            <input type="checkbox" name="weekend" />
                            <label for="weekend">Выходной</label>
                        </div>
                    </div>
                    <div class="hours">
                        <?php for($i = 0; $i <= 23; $i++) { ?>
                            <?php
                                if($i < 10) {$title = '0' . $i . ':00';} else{$title = $i . ':00';}
                            ?>
                            <div class="hour"><span><?php echo $title; ?></span></div>
                        <?php } ?>
                    </div>
                    <div class="grid">
                        <div class="marker"></div>
                        <?php for($i = 1; $i <= 48; $i++) { ?>
                            <div class="row" data-time="<?php echo $i; ?>"></div>
                        <?php } ?>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="today-events">
                <h4>События сегодня</h4>
                <div class="content-block events">
                    <!-- <div class="event active skype">
                        <div class="border"></div>
                        <h5 class="title">Консультация с ивановым</h5>
                        <p class="time">Время: <span class="value">10:00 - 11:00</span></p>
                        <p class="method">Способ: <span class="value">Skype</span></p>
                        <p class="participiant">Участник: <a href="#" class="value">Владимиров Владимир</a></p>
                    </div>
                    <div class="event skype">
                        <div class="border"></div>
                        <h5 class="title">Консультация с ивановым</h5>
                        <p class="time">Время: <span class="value">10:00 - 11:00</span></p>
                        <p class="method">Способ: <span class="value">Skype</span></p>
                        <p class="participiant">Участник: <a href="#" class="value">Владимиров Владимир</a></p>
                    </div>
                    <div class="event private">
                        <div class="border"></div>
                        <h5 class="title">Личная консультация</h5>
                        <p class="time">Время: <span class="value">14:00 - 16:00</span></p>
                        <p class="method">Способ: <span class="value">Личная встреча</span></p>
                        <p class="participiant">Участник: <a href="#" class="value">Владимиров Владимир</a></p>
                    </div> -->
                    <a href="#" class="btn">Посмотреть все консультации</a>
                </div>
                <h4>Офис проведения консультации</h4>
                <select name="office" class="select2">
                    <option value="0">Москва, Красношкльная набережная, 48</option>
                </select>
            </div>
        </section>
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