<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-question-list">
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
        <div class="content-block dialogues">
            <div class="padding-container">
                <input type="text" class="search" data-action="#" data-method="POST" placeholder="Поиск..." />
            </div>
            <div class="contacts scrolltarget mouseover scrollbar">
                <?php for($i = 0; $i <= 10; $i++) { ?>
                <div class="contact <?php if($i == 1) echo 'active'; ?>">
                    <div class="photo-container">
                        <img src="images/photos/02.jpg" alt="">
                    </div>
                    <div class="content">
                        <p class="name">Иван Иванов</p>
                        <p class="date">26.02.2015</p>
                        <div class="clr"></div>                            
                        <p class="text">Текст последнего сообщения будет здесь...</p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="content-block dialogue">
            <div class="head">
                <h3 class="contact-name">Иван Иванов</h3>
                <div class="contact-menu">
                    <a href="#" class="dotts">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <span class="clr"></span>
                    </a>
                </div>
                <div class="clr"></div>
            </div>
            <div class="messages scrolltarget mouseover scrollbar">
                <?php for($i = 25; $i >= 18; $i--) {?>
                <p class="day"><span><?php echo $i; ?> февраля</span></p>
                <div class="message question" data-id="0">
                    <div class="photo-container">
                        <img src="images/photos/02.jpg" alt="" />
                    </div>
                    <div class="content">
                        <p class="author">Иван Иванов</p>
                        <div class="message-menu">
                            <a href="#" class="dotts">
                                <i class="fa fa-circle"></i>
                                <i class="fa fa-circle"></i>
                                <i class="fa fa-circle"></i>
                                <span class="clr"></span>
                            </a>
                        </div>
                        <div class="clr"></div>
                        <p class="text">
                            Не следует, однако забывать, что начало повседневной работы по формированию позиции позволяет выполнять важные задания по разработке дальнейших направлений развития. Разнообразный и богатый опыт сложившаяся структура организации требуют определения и уточнения форм развития.
                        </p>
                        <p class="date">
                            26.02.2015
                        </p>
                    </div>
                </div>
                <div class="message answer" data-id="1">
                    <div class="photo-container">
                        <img src="images/photos/01.jpg" alt="" />
                    </div>
                    <div class="content">
                        <p class="author">Анька Говядина</p>
                        <div class="message-menu">
                            <a href="#" class="dotts">
                                <i class="fa fa-circle"></i>
                                <i class="fa fa-circle"></i>
                                <i class="fa fa-circle"></i>
                                <span class="clr"></span>
                            </a>
                        </div>
                        <div class="clr"></div>
                        <p class="text">
                            Да, конечно!
                        </p>
                        <p class="date">
                            26.02.2015
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
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