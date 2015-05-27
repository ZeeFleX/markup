<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-faq">
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
    <div class="wrapper">
        <section class="search-answer content-block">
            <h1>Часто задаваемые вопросы</h1>
            <p>Нужна помощь? Найдите ответ.</p>
            <div class="">
                <input type="text" class="search" data-method="POST" data-action="#" placeholder="Введите вопрос для поиска" />
            </div>
        </section>
        <div class="clr"></div>
        <div class="questions-container">
            <div class="questions">
                <div class="group">
                    <h4>Общие вопросы</h4>
                    <?php for($i = 0; $i <= 2; $i++) { ?>
                    <div class="question content-block active">
                        <div class="show-answer-arrow"></div>
                        <div class="question-text with">
                            <p>Задача организации, в особенности же консультация с широким активом играет важную роль?</p>
                        </div>
                        <div class="clr"></div>
                        <div class="answer">
                            <p>Задача организации, в особенности же начало повседневной работы по формированию позиции позволяет выполнять важные задания по разработке соответствующий условий активизации. Идейные соображения высшего порядка, а также новая модель организационной деятельности играет важную роль в формировании позиций, занимаемых участниками в отношении поставленных задач. Не следует, однако забывать, что постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач. Таким образом начало повседневной работы по формированию позиции требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям.</p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="group">
                    <h4>Участник</h4>
                    <?php for($i = 0; $i <= 2; $i++) { ?>
                    <div class="question content-block">
                        <div class="show-answer-arrow"></div>
                        <div class="question-text">
                            <p>Задача организации, в особенности же консультация с широким активом играет важную роль?</p>
                        </div>
                        <div class="clr"></div>
                        <div class="answer">
                            <p>Задача организации, в особенности же начало повседневной работы по формированию позиции позволяет выполнять важные задания по разработке соответствующий условий активизации. Идейные соображения высшего порядка, а также новая модель организационной деятельности играет важную роль в формировании позиций, занимаемых участниками в отношении поставленных задач. Не следует, однако забывать, что постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач. Таким образом начало повседневной работы по формированию позиции требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям.</p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="group">
                    <h4>Гость</h4>
                    <?php for($i = 0; $i <= 2; $i++) { ?>
                    <div class="question content-block">
                        <div class="show-answer-arrow"></div>
                        <div class="question-text">
                            <p>Задача организации, в особенности же консультация с широким активом играет важную роль?</p>
                        </div>
                        <div class="clr"></div>
                        <div class="answer">
                            <p>Задача организации, в особенности же начало повседневной работы по формированию позиции позволяет выполнять важные задания по разработке соответствующий условий активизации. Идейные соображения высшего порядка, а также новая модель организационной деятельности играет важную роль в формировании позиций, занимаемых участниками в отношении поставленных задач. Не следует, однако забывать, что постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач. Таким образом начало повседневной работы по формированию позиции требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям.</p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="clr"></div>
            
        </div>
        <aside class="additional-menu">
            <h4>FAQ навигатор</h4>
            <div class="content-block">
                <ul>
                    <li class="active">
                        <a href="#">Гость</a>
                    </li>
                    <li>
                        <a href="#">Участник</a>
                    </li>
                    <li>
                        <a href="#">Консультант</a>
                        <ul>
                            <li>
                                <a href="#">Оплата</a>
                            </li>
                            <li>
                                <a href="#">Консультации</a>
                            </li>
                            <li>
                                <a href="#">Библиотека</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
    <div class="clr"></div>
    <div class="wrapper">
        <form action="#" method="POST" class="ask content-block">
            <input type="file" class="hidden" name="question-file">
            <h2>Не нашли ответ?</h2>
            <p>Напишите нам Ваш вопрос! Мы ответим в течение 24 часов.</p>
            <div class="field name">
                <label for="name">Ваше имя</label>
                <input type="text" name="name" placeholder="Введите ваше имя">
            </div>
            <div class="field email">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Введите ваш email">
            </div>
            <div class="clr"></div>
            <div class="field theme">
                <label for="theme">Вопрос (кратко)</label>
                <input type="text" name="theme" placeholder="Напишите кратко о чем Ваш вопрос" class="allow-clear">
            </div>
            <div class="field question-content">
                <label for="question-content">Вопрос (подробно)</label>
                <textarea name="question-content" class="allow-clear" placeholder="Опишите Вашу проблему"></textarea>
            </div>
            <div class="field file">
                <a href="#" id="attach-file" class="btn ghost">Прикрепить файл</a>
                <p>Макс. размер файла 5Mb.</p>
            </div>
            <div class="clr"></div>
            <input type="submit" class="btn" value="Задать вопрос">
            <a href="#" class="btn ghost" id="support">Обратиться в техподдержку</a>
        </form>
        <div class="right">
            <div class="instruction content-block">
                <h4>Как задать вопрос</h4>
                <ol>
                    <li>Внимательно заполните поля «email» и «раздел».</li>
                    <li>В поле «Описание проблемы» максимально четко и подробно изложите суть Вашего вопроса. Опишите свои дейтсвия по шагам.</li>
                    <li>При необходимости загрузите к вопросу скриншот экрана или другую дополнительную информацию.</li>
                    <li>Стандартный срок ответа 24 часа.</li>
                </ol>
            </div>
            <div class="support">
                <h4>Служба поддержки</h4>
                <div class="content-block">
                    <p class="email"><i class="fa fa-envelope-o"></i><a href="#">support@consult4me.ru</a></p>
                    <p class="skype"><i class="fa fa-skype"></i><a href="#">support.dowlatow</a></p>
                    <p class="worktime">Время работы поддержки:<br /> 10.00-24.00 мск</p>
                </div>
            </div>
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