<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-consultation">
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
    <section class="wrapper">
        <div class="profile content-block">
            <div class="left">
                <div class="photo">
                    <img src="images/photos/03.jpg" alt="" />
                </div>
                <p class="place"><i class="fa fa-map-marker"></i> Россия, Москва</p>
            </div>
            <div class="right">
                <header>
                    <div class="name">
                        <p class="lastname">Иванов</p>
                        <p class="firstname">Сан Саныч</p>
                        <p class="job">Участник <span>35 лет</span></p>
                    </div>
                    <div class="toolbar">
                        <a href="#" class="envelope"><i class="fa fa-envelope-o"></i></a>
                        <div class="profile-menu popup-menu">
                            <a href="#" class="dotts">
                                <i class="fa fa-circle"></i>
                                <i class="fa fa-circle"></i>
                                <i class="fa fa-circle"></i>
                                <span class="clr"></span>
                            </a>
                            <div class="menu-container">
                                <div class="menu">
                                    <div class="siding"></div>
                                    <a href="#"><i class="fa fa-cogs"></i></a>
                                    <a href="#"><i class="fa fa-comment-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="contacts">
                    <h5>Контакты</h5>
                    <p>Skype: <span class="value">Ivanov</span></p>
                    <p>Телефон: <span class="value">+7 999 99 99</span></p>
                    <p>E-mail: <span class="value">san_sanych@gmail.com</span></p>
                </div>
                <div class="introtext">
                    <p>
                        Идейные активности позволяет выполнять важные задания по разработке модели развития. позволяет выполнять важные задания по разработке по разработке  модели развития...
                    </p>
                    <a href="#" class="readmore">подробнее</a>
                </div>
                
            </div>
        </div>
        <section class="consultation-info">
            <h4>Консультация</h4>
            <div class="content-block">
                <div class="info">
                    <div class="head">
                        <h5>Информация о консультации</h5>
                        <i class="fa fa-calendar"></i>
                    </div>
                    <div class="content">
                        <p class="date">
                            <span class="key">Дата и время:</span> <span class="value">9 февраля, 2015 - 14:00-16:00</span>
                        </p>
                        <p class="method">
                            <span class="key">Способ:</span> <span class="value">Личная встреча</span>
                        </p>
                        <p class="pricing">
                            <span class="key">Стоимость:</span> <span class="value">3000 рублей</span> <!--<span class="paid"><i class="fa fa-times-circle-o"></i> Не оплачено</span> --><span class="paid"><i class="fa fa-check-circle-o"></i> Оплачено</span>
                        </p>
                        <div class="clr"></div>
                        
                        <p class="remaining">Вы сможете перейти к прохождению сессии через: <span class="value">48 минут</span></p>
                        <!-- <a href="#" class="btn green" id="pay">Оплатить</a> -->
                        <a href="#" class="btn disabled ghost">Перейти к сессии</a>
                        <a href="#" class="btn ghost">Изменить расписание консультации</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="clr"></div>
        <section class="questions">
            <h4>Вопросы по консультации</h4>
            <div class="messages content-block">
                <?php for($i = 0; $i <= 1; $i++) {?>
                <div class="message">
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
                                <a href="#"><i class="fa fa-comment-o"></i></a>
                                <a href="#"><i class="fa fa-thumbs-up"></i></a>
                                <a href="#"><i class="fa fa-thumbs-down"></i></a>
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
                    <input type="submit" value="Задать вопрос" class="btn"/>
                </form>
            </div>
        </section>
        <section class="my-notes">
            <h4>Мои заметки</h4>
            <div class="content-block">
                <div class="notes">
                    <div class="note">
                        <p class="text">
                            Равным образом укрепление и развитие структуры позволяет выполнять важные задания по разработке системы обучения кадров, соответствует насущным потребностям.

                        </p>
                        <span class="date">20 минут назад</span>
                        <div class="note-menu popup-menu right-side">
                            <a href="#" class="dotts">
                                <i class="fa fa-circle"></i>
                                <i class="fa fa-circle"></i>
                                <i class="fa fa-circle"></i>
                            </a>
                            <div class="menu-container">
                                <div class="menu">
                                    <div class="siding"></div>
                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                    <a href="#"><i class="fa fa-trash-o"></i></a>
                                    <a href="#"><i class="fa fa-comment-o"></i></a>
                                    <a href="#"><i class="fa fa-thumbs-up"></i></a>
                                    <a href="#"><i class="fa fa-thumbs-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="note">
                        <p class="text">
                            Равным образом укрепление и развитие структуры позволяет выполнять важные задания по разработке системы обучения кадров, соответствует насущным потребностям.

                        </p>
                        <span class="date">20 минут назад</span>
                        <div class="note-menu popup-menu right-side">
                            <a href="#" class="dotts">
                                <i class="fa fa-circle"></i>
                                <i class="fa fa-circle"></i>
                                <i class="fa fa-circle"></i>
                            </a>
                            <div class="menu-container">
                                <div class="menu">
                                    <div class="siding"></div>
                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                    <a href="#"><i class="fa fa-trash-o"></i></a>
                                    <a href="#"><i class="fa fa-comment-o"></i></a>
                                    <a href="#"><i class="fa fa-thumbs-up"></i></a>
                                    <a href="#"><i class="fa fa-thumbs-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="#" class="add-note">
                    <textarea name="new-note" placeholder="Добавьте заметку"></textarea>
                    <input type="submit" value="Добавить заметку" class="btn">
                </form>
            </div>
        </section>
        <div class="clr"></div>
        <section class="reviews">
            <h4>Отзывы об участнике</h4>
            <div class="content-block reviews-list">
                <div class="review dashed b-radius">
                    <div class="quote-arrow"></div>
                    <p class="content">
                        Повседневная практика показывает, что укрепление и развитие структуры в значительной степени обуславливает создание модели развития. Повседневная практика показывает, что рамки и место обучения кадров представляет собой интересный эксперимент проверки существенных финансовых и административных условий.
                    </p>
                    <div class="author">
                        <div class="photo">
                            <img src="images/photos/02.jpg" alt="" />
                        </div>
                        <div class="text">
                            <p>
                                <span class="author-name">Иван Иванов</span> оставил отзыв об участнике <span class="user-name">Сан Саныч</span>
                            </p>
                        </div>
                        <div class="clr"></div>
                    </div>
                    <div class="toolbar">
                        <div class="review-menu">
                            <a href="#" class="dotts">
                                <i class="fa fa-circle"></i>
                                <i class="fa fa-circle"></i>
                                <i class="fa fa-circle"></i>
                            </a>
                        </div>
                        <p class="review-date">три дня назад</p>
                        <a href="#" class="readmore">Читать весь отзыв</a>
                        <div class="clr"></div>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="review dashed b-radius">
                    <div class="quote-arrow"></div>
                    <p class="content">
                        Повседневная практика показывает, что укрепление и развитие структуры в значительной степени обуславливает создание модели развития. Повседневная практика показывает, что рамки и место обучения кадров представляет собой интересный эксперимент проверки существенных финансовых и административных условий.
                    </p>
                    <div class="author">
                        <div class="photo">
                            <img src="images/photos/02.jpg" alt="" />
                        </div>
                        <div class="text">
                            <p>
                                <span class="author-name">Иван Иванов</span> оставил отзыв об участнике <span class="user-name">Сан Саныч</span>
                            </p>
                        </div>
                    </div>
                    <div class="toolbar">
                        <div class="review-menu">
                            <a href="#" class="dotts">
                                <i class="fa fa-circle"></i>
                                <i class="fa fa-circle"></i>
                                <i class="fa fa-circle"></i>
                            </a>
                        </div>
                        <p class="review-date">три дня назад</p>
                        <a href="#" class="readmore">Читать весь отзыв</a>
                    </div>
                </div>
                <a href="#" class="btn ghost" id="load-more-reviews">Показать еще 5 отзывов</a>
            </div>
            <h4>Написать отзыв об участнике</h4>
            <div class="content-block write-review">
                <form action="index.html" method="POST">
                    <div class="field">
                        <textarea name="review-content" class="allow-clear" placeholder="Напишите что-то хорошее об участнике"></textarea>
                    </div>
                    <input type="submit" class="btn" value="Добавить отзыв" />
                </form>
            </div>
        </section>
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