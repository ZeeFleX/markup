<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-mainpage common">
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
        <div class="wrapper">
            <section class="statistic content-block">
                <div class="item">
                    <i class="fa fa-check-circle-o"></i>
                    <div class="text">
                        <p class="count">71 456</p>
                        <p class="object">КОНСУЛЬТАЦИЙ</p>
                    </div>
                </div>
                <div class="item">
                    <i class="fa fa-users"></i>
                    <div class="text">
                        <p class="count">1 456</p>
                        <p class="object">КОНСУЛЬТАНТОВ</p>
                    </div>
                </div>
                <div class="item">
                    <i class="fa fa-comment-o"></i>
                    <div class="text">
                        <p class="count">2 465</p>
                        <p class="object">ОТЗЫВОВ</p>
                    </div>
                </div>
                <div class="item last">
                    <i class="fa fa-microphone"></i>
                    <div class="text">
                        <p class="count">1 589</p>
                        <p class="object">Вопросов и ответов</p>
                    </div>
                </div>
            </section>
            <section class="content-block search-consultant">
                <h3>Найдите вашего консультанта</h3>
                <form action="#" id="search-consultant" method="POST">
                    <div class="field special with-shadow">
                        <select name="special" class="select2">
                            <option value="0">Выберите специализацию</option>
                            <option value="1">Животноводство</option>
                        </select>
                    </div>
                     <div class="field city with-shadow">
                        <select name="city" class="select2">
                            <option value="0">Москва</option>
                            <option value="1">Санкт-Петербург</option>
                        </select>
                    </div>
                    <div class="submit with-shadow">
                        <input type="submit" class="btn yellow" value="Найти" />
                    </div>
                    <div class="clr"></div>
                </form>
            </section>
            <section class="urgent-consult content-block">
                <i class="fa fa-warning"></i>
                <h2>Нужна срочная консультация?</h2>
                <a href="#" class="btn ghost">Записаться на срочную консультацию</a>
            </section>
            <section class="catalog-articles">
                <div class="categories">
                    <h4>Категории статей</h4>
                    <div class="content-block">
                        <ul class="menu">
                            <li><a href="#">Он и она</a></li>
                            <li><a href="#">Проблемные адаптация</a></li>
                            <li><a href="#">Наши дети</a></li>
                            <li><a href="#">Дела семейные</a></li>
                            <li><a href="#">Кризисы, депрессия</a></li>
                            <li><a href="#">Страхи и комплексы</a></li>
                            <li><a href="#">Бизнес-психология</a></li>
                            <li><a href="#">Психотерапия</a></li>
                        </ul>
                        <a href="#" class="btn">Библиотека</a>
                    </div>
                </div>
                <div class="last-articles">
                    <h4>Новые статьи</h4>
                    <div class="clr"></div>
                    <?php for($i = 0; $i <= 2; $i++) {?>
                    <div class="article content-block">
                        <div class="teaser-container">
                            <img src="images/interface/image-placeholder.png" alt="">
                        </div>
                        <div class="content">
                            <h4>Название статьи</h4>
                            <p class="category">Категория: <span>Проблемные адаптации</span></p>
                            <p class="author">Иван Иванов</p>
                            <p class="introtext">Равным образом укрепление и развитие структуры позволяет выполнять важные задания по разработке системы обучения кадров...</p>
                            <p class="date">Месяц назад</p>
                        </div>
                        <a href="#" class="btn ghost">Посмотреть</a>
                    </div>
                    <?php } ?>
                </div>
            </section>
            <section class="ask-question content-block">
                <a href="#" class="btn with-shadow">Задать вопрос</a>
                <h2>Хотите задать вопрос консультантам?</h2>
            </section>
            <section class="questions">
                <?php for($i = 0; $i <= 3; $i++) { ?>
                <?php //if($i % 2 == 0) echo '<div class="clr"></div>'; ?>
                <div class="question content-block">
                    <div class="author">
                        <div class="photo-container">
                            <img src="images/photos/02.jpg" alt="">
                        </div>
                        <div class="container">
                            <p class="name">Иван Иванов</p>
                            <p class="job">Участник</p>
                            <p class="category">Категория: <span>Разрешение конфликтов</span></p>
                        </div>
                    </div>
                    <h4>Вопрос:</h4>
                    <div class="question-content">
                        <div class="fader"></div>
                        <p>
                            Равным образом укрепление и развитие структуры позволяет выполнять важные задания по разработке системы обучения кадров, соответствует насущным потребностям. Идейные соображения выс...
                        </p>
                    </div>
                    <h4>Ответил: <span>Владимиров Владимир</span></h4>
                    <div class="answer-content">
                        <div class="fader"></div>
                        <p>
                            Разнообразный и богатый опыт сложившаяся структура организации играет важную роль в формировании соответствующий условий активизации. Идейные соображения высшего порядка, а также сложившаяся структура организации обеспечивает широкому кругу (специалистов) участие в формировании позиций.
                        </p>
                    </div>
                    <a href="#" id="read-more">Посмотреть полностью</a>
                </div>
                <?php } ?>
            </section>
            <section class="professional-consults">
                <h4>Профессиональные консультанты</h4>
                <div class="slider">
                    <div class="wrapper">
                        <?php for($i = 0; $i <= 18; $i++) { ?>
                        <div class="item content-block">
                            <div class="photo-container">
                                <a href="#">
                                    <img src="images/interface/image-placeholder.png" alt="" />
                                </a>
                            </div>
                            <a href="#" class="username">
                                <span class="lastname">Иванов</span><br />
                                <span>Иван Иванович</span>
                            </a>
                            <div class="rating-block">
                                <p class="value"><span class="current-value">8</span>/10</p>
                                <p class="title"><span>Рейтинг</span></p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="controls-container">
                        <div class="controls">
                        </div>
                    </div>
                </div>
                <a href="#" class="btn" id="show-all-users">Посмотреть всех консультантов</a>
            </section>
        </div>
    </div>
    <div class="modal" id="authorization-window">
        <div class="container">
            <h1>Вход</h1>
            <div class="left">
                <a href="#" class="omni-sign-in" id="fb"><i class="fa fa-facebook"></i><span>Войти через Facebook</span></a>
                <a href="#" class="omni-sign-in" id="vk"><i class="fa fa-vk"></i><span>Войти через VKontakte</span></a>
                <a href="#" class="omni-sign-in" id="ok"><i class="fa fa-facebook"></i><span>Войти через Одноклассники</span></a>
                <p>
                    Забыли пароль?<br />
                    Войдите с помощью социальных сетей или<br />
                    <a href="#" class="forgot-password" id="forgot-password">восстановите пароль</a>
                </p>
            </div>
            <div class="right">
                <form action="">
                    <input type="text" name="email" placeholder="Ваш email" />
                    <input type="text" name="password" placeholder="Ваш пароль" />
                    <input type="submit" class="btn" value="Вход" />
                    <p>
                        Нажимая на кнопку «Вход» Вы подтверждаете согласие с <a href="#">Политикой конфиденциальности</a> и <a href="#">Условиями использования</a>
                    </p>
                </form>
            </div>
            <div class="clr"></div>
            <div class="links">
                <a class="sign-up" id="sign-up" href="#">Создать <span>новый аккаунт</span></a>
            </div>
        </div>
    </div>
    <div class="modal" id="registration-window">
        <div class="container">
            <h1>Регистрация</h1>
            <div class="left">
                <a href="#" class="omni-sign-in" id="fb"><i class="fa fa-facebook"></i><span>Войти через Facebook</span></a>
                <a href="#" class="omni-sign-in" id="vk"><i class="fa fa-vk"></i><span>Войти через VKontakte</span></a>
                <a href="#" class="omni-sign-in" id="ok"><i class="fa fa-facebook"></i><span>Войти через Одноклассники</span></a>
            </div>
            <div class="right">
                <form action="">
                    <input type="text" name="email" placeholder="Ваш email" />
                    <input type="text" name="password" placeholder="Ваш пароль" />
                    <input type="submit" class="btn" value="Зарегистрироваться" />
                    <p>
                        Нажимая на кнопку «Вход» Вы подтверждаете согласие с <a href="#">Политикой конфиденциальности</a> и <a href="#">Условиями использования</a>
                    </p>
                </form>
            </div>
            <div class="clr"></div>
            <div class="links">
                <a class="sign-in" id="sign-in" href="#">Уже зарегистрированы? <span>Войдите</span></a>
            </div>
        </div>
    </div>
    <div class="modal" id="forgot-password-window">
        <div class="container">
            <h1>Восстановление пароля</h1>
            <form action="">
                <input type="text" name="email" placeholder="Ваш email" />
                <input type="submit" class="btn" value="Сбросить пароль" />
            </form>
            <div class="clr"></div>
            <div class="links">
                <a class="sign-in" id="sign-in" href="#">Вспомнили пароль? <span>Войдите</span></a>
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