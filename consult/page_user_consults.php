<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-user-consults">
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
        <a class="sign-in btn" href="/">Войти</a>
        <ul class="mainmenu">
            <li><a href="#">Публичные вопросы</a></li>
            <li><a href="#">Консультанты</a></li>
            <li><a href="#">Библиотека</a></li>
        </ul>
    </header>
    <section class="user-menu-section">
        <div class="wrapper">
            <div class="user-menu-container">
                <ul class="user-menu">
                    <li>
                        <a href="#">Мое расписание</a>
                    </li>
                    <li>
                        <a href="#">Мои клиенты</a>
                    </li>
                    <li class="active">
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
    <section class="wrapper">
        <div class="consults">
            <?php for($k = 0; $k <=7; $k++) { ?>
            <div class="content-block consult">
                <div class="info">
                    <i class="fa fa-calendar"></i>
                    <h5>Личная встреча</h5>
                    <p class="date"><span class="key">Дата и время:</span> <span class="value">9 февраля, 2015 4:00-16:00</span></p>
                    <p class="place"><span class="key">Место:</span> <span class="value">Москва, Ленинский проспект, 15</span></p>
                    <p class="participiant"><span class="key">Участник:</span> <span class="value"><a href="#">Иванов Иван Иваныч</a></span></p>
                    <p class="price"><span class="key">Стоимость:</span> <span class="value">3 000 рублей</span> <span class="paided"><i class="fa fa-check-circle-o"></i> Оплачено</span><span class="not-paided"><i class="fa fa-times-circle-o"></i> Не оплачено</span></p>
                </div>
                <form class="invitation">
                    <input type="text" name="invite-user" placeholder="Введите email участника для приглашения">
                    <input type="submit" value="Отправить приглашение" class="btn ghost">
                </form>
                <div class="go-to-session">
                    <p>Вы сможете перейти к прохождению сессии через: <span class="time-remaining">48 минут</span></p>
                    <a href="#" class="btn ghost disabled">Перейти к сессии</a>
                </div>
                <div class="consult-actions">
                    <a href="#" class="change-schedule btn ghost">Изменить расписание консультации</a>
                    <a href="#" class="change-schedule btn ghost">Консультация</a>
                    <a href="#" class="submit-date btn ghost">Подтвердить оплату</a>
                </div>
                <div class="clr"></div>
                <div class="questions">
                    <h5>Вопросы по консультации</h5>
                    <?php for($i = 0; $i <= 1; $i++) {?>
                    <div class="question">
                        <div class="question-menu popup-menu">
                            <a href="#" class="dotts">
                                <i class="fa fa-circle"></i>
                                <i class="fa fa-circle"></i>
                                <i class="fa fa-circle"></i>
                                <span class="clr"></span>
                            </a>
                            <div class="menu-container">
                                <div class="menu">
                                    <div class="siding"></div>
                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                    <a href="#"><i class="fa fa-trash-o"></i></a>
                                    <!-- <a href="#"><i class="fa fa-comment-o"></i></a>
                                    <a href="#"><i class="fa fa-thumbs-up"></i></a>
                                    <a href="#"><i class="fa fa-thumbs-down"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="author">
                            <div class="photo-container">
                                <img src="images/photos/02.jpg" alt="">
                            </div>
                            <div class="container">
                                <p class="name">Иван Иванов</p>
                                <p class="job">Участник</p>
                            </div>
                        </div>
                        <p class="text">
                            Равным образом укрепление и развитие структуры позволяет выполнять важные задания по разработке системы обучения кадров, соответствует насущным потребностям. Идейные соображения выс...                  

                        </p>
                        <p class="date">20 минут назад</p>
                    </div>
                    <?php } ?>
                    <a href="#" id="read-more">Показать всю переписку</a>
                    <form action="#" class="ask-question">
                        <textarea name="question" placeholder="Задайте вопрос по консультации" class="allow-clear"></textarea>
                        <input type="submit" value="Ответить" class="btn"/>
                    </form>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
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