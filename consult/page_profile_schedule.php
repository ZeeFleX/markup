<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-profile-schedule">
    <div class="edit-worktime">
        <div class="fader"></div>
        <div class="content-block">
            <i class="close fa fa-close"></i>
            <h4>Настройка рабочего времени</h4>
            <form action="#" method="POST">
                <div class="field times">
                    <div class="end timeselect">
                        <span>по</span>
                        <input type="text" class="timepicker-light" name="end" placeholder="Выберите время" />
                    </div>
                    <div class="begin timeselect">
                        <span>с</span>
                        <input type="text" class="timepicker-light" name="begin" placeholder="Выберите время" />
                    </div>
                    <label for="times" class="date">9 января 2015 года</label>
                    <div class="clr"></div>
                </div>
                <div class="field type">
                    <input type="radio" name="type" value="unwork" checked="checked">
                    <label for="type">Нерабочее время</label>
                    <div class="clr"></div>
                    <input type="radio" name="type" value="work">
                    <label for="type">Рабочее время</label>
                    <div class="clr"></div>
                    <div class="worktype">
                        <input type="checkbox" name="online">
                        <label for="online">Skype, Онлайн-кабинет</label>
                        <div class="clr"></div>
                        <input type="checkbox" name="meeting">
                        <label for="meeting">Личные встречи</label>
                    </div>
                </div>
                <input type="submit" value="Сохранить" class="btn">
            </form>
        </div>
    </div>
    <div class="edit-schedule">
        <div class="fader"></div>
        <div class="content-block">
            <i class="close fa fa-close"></i>
            <h4>Добавить cобытие</h4>
            <form action="#" method="POST">
                <!-- <div class="unwork section" data-type="unwork">
                    <input type="checkbox" name="unwork" class="section-handler" />
                    <label for="unwork-time">Нерабочее время</label>
                    <div class="clr"></div>
                    <div class="accordeon-container">
                        <div class="field begin">
                            <label for="begin">Начало</label>
                            <input type="text" class="timepicker-light" name="begin"  placeholder="Выберите время"/>
                        </div>
                        <div class="field end">
                            <label for="end">Окончание</label>
                            <input type="text" class="timepicker-light" name="end"  placeholder="Выберите время"/>
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="free-time section" data-type="free">
                    <input type="checkbox" name="free-time" class="section-handler" />
                    <label for="free-time">Свободное время</label>
                    <div class="clr"></div>
                    <div class="accordeon-container">
                        <div class="type">
                            <div class="field">
                                <input type="checkbox" name="type" value="online-time" />
                                <label for="type">Онлайн (Skype, Онлайн-кабинет)</label>
                            </div>
                            <div class="times online-time">
                                <div class="field begin">
                                    <label for="free-begin">Начало</label>
                                    <input type="text" class="timepicker" name="free-begin" placeholder="Выберите время"/>
                                </div>
                                <div class="field end">
                                    <label for="free-end">Окончание</label>
                                    <input type="text" class="timepicker" name="free-end" placeholder="Выберите время" />
                                </div>
                                <div class="clr"></div>
                            </div>
                            <div class="field">
                                <input type="checkbox" name="type" value="meet-time" />
                                <label for="type">Личные встречи</label>
                            </div>
                            <div class="times meet-time">
                                <div class="field begin">
                                    <label for="free-begin">Начало</label>
                                    <input type="text" class="timepicker" name="free-begin" placeholder="Выберите время"/>
                                </div>
                                <div class="field end">
                                    <label for="free-end">Окончание</label>
                                    <input type="text" class="timepicker" name="free-end" placeholder="Выберите время" />
                                </div>
                                <div class="clr"></div>
                            </div>
                            <select name="office" id="office" class="select2">
                                <option value="0">Москва, Петровская-разумовская, 14, оф. 5</option>
                            </select>
                        </div>
                        <div class="clr"></div>
                    </div>
                </div> -->
                <div class="consult section" data-type="consult">
                    <div class="type">
                        <div class="field">
                            <input type="radio" name="type" value="skype" />
                            <label for="type">Skype</label>
                        </div>
                        <div class="clr"></div>
                        <div class="field">
                            <input type="radio" name="type" value="private" />
                            <label for="type">Личная встреча</label>
                        </div>
                        <div class="clr"></div>
                        <div class="field">
                            <input type="radio" name="type" value="cards" />
                            <label for="type">Онлайн-кабинет</label>
                        </div>
                    </div>
                    <div class="clr"></div>
                    <!-- <div class="field title">
                        <label for="title">Название мероприятия</label>
                        <input type="text" name="title" placeholder="Введите заголовок для мероприятия" class="allow-clear"/>
                    </div> -->
                    <div class="field participiant">
                        <label for="participiant">Участник</label>
                        <input type="text" name="participiant" placeholder="Введите ФИО участника консультации" class="allow-clear"/>
                    </div>
                    <div class="field begin">
                        <label for="consult-begin">Начало</label>
                        <input type="text" class="" disabled="disabled" name="begin" placeholder="Выберите время"/>
                    </div>
                    <div class="field end">
                        <label for="consult-end">Окончание</label>
                        <input type="text" class=""  disabled="disabled" name="end" placeholder="Выберите время" />
                    </div>
                    <div class="clr"></div>
                    <div class="field comment">
                        <label for="comment">Комментарий</label>
                        <textarea name="comment" id="comment" placeholder="Добавьте комментарий к событию" class="allow-clear"></textarea>
                    </div>
                    <!-- <a href="#" id="cancel">Отменить консультацию</a> -->
                    <div class="clr"></div>
                </div>
                <input type="submit" class="btn" value="Сохранить" />
                <input type="button" class="close btn ghost" id="cancel-form" value="Отменить" />
                <div class="clr"></div>
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
                        <p><a href="#" id="select-date"><span class="date">9 января, 2015</span> <span class="day-of-week">Пятница</span></a></p>
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
                        <!-- <div class="full-day field">
                            <input type="checkbox" name="full-day" checked="checked" />
                            <label for="full-day">Показать полные сутки</label>
                        </div> -->
                        <div class="field weekend">
                            <input type="checkbox" name="weekend" />
                            <label for="weekend">Выходной</label>
                        </div>
                    </div>
                    <div class="freetime-grid">
                        <p class="label">Планирование дня</p>
                        
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
                    <div class="legend">
                        <h5>Планирование дня</h5>
                        <p>
                            <span class="meeting"></span> - Время для проведения личных встреч 
                        </p>
                        <p>
                            <span class="online"></span> - Время для проведения online-консультаций 
                        </p>
                        <p>
                            <span class="unwork"></span> - Нерабочее время 
                        </p>
                        <h5>События</h5>
                        <p>
                            <span class="meeting"></span> - Личная встреча 
                        </p>
                        <p>
                            <span class="online"></span> - Online-консультация 
                        </p>
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
                    <!-- <a href="#" class="btn">Посмотреть все консультации</a> -->
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