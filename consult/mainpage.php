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
        <!-- <a class="sign-in btn" id="sign-in" href="/">Войти</a> -->
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
        
        <ul class="mainmenu text">
            <li><a href="#">Публичные вопросы</a></li>
            <li><a href="#">Консультанты</a></li>
            <li><a href="#">Библиотека</a></li>
            <li><a href="#">FAQ</a></li>
        </ul>
        <ul class="mainmenu icons">
            <li><a href="#"><i class="fa fa-comments"></i></a></li>
            <li><a href="#"><i class="fa fa-suitcase"></i></a></li>
            <li><a href="#"><i class="fa fa-book"></i></a></li>
            <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
        </ul>
        <div class="time">
            <p>МЫ РАБОТАЕМ ПО МСК</p>
            <div class="clock"></div>
        </div>
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
                    <section class="articles-flow three-columns">
                        <?php 
                            for($i = 0; $i <= 10; $i++) {
                            $img = rand(0,1);
                            $names = Array(
                                'Короткое название',
                                'Название чуть-чуть длиннее',
                                'Название статьи очень длинное в несколько строк',
                                'Экстремально длиннющее название очередной статьи в несколько строк'
                            );
                            $contents = Array(
                                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, nostrum.',
                                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate explicabo temporibus natus praesentium adipisci, eaque aspernatur hic. Et quis, accusantium. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate explicabo temporibus natus praesentium adipisci, eaque aspernatur hic. Et quis, accusantium. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate explicabo temporibus natus praesentium adipisci, eaque aspernatur hic. Et quis, accusantium.',
                                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, nostrum. Obcaecati assumenda velit excepturi sit rerum, suscipit. Dolores, in atque eveniet necessitatibus animi ad voluptas? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, nostrum. Obcaecati assumenda velit excepturi sit rerum, suscipit. Dolores, in atque eveniet necessitatibus animi ad voluptas?'
                            );
                        ?>
                        <div class="article flow-item content-block">
                            <?php if($img) {?>
                            <div class="image">
                                <img src="images/interface/image-placeholder.png" alt="" />
                            </div>
                            <?php } ?>
                            <div class="content">
                                <div class="fader-container <?php if(!$img) echo 'full-height'; ?>">
                                    <h4 class="article-name"><?php echo $names[rand(0,3)]; ?></h4>
                                    <p class="category">Категория: <span class="value">Проблемные адаптации</span></p>
                                    <p class="author">Иван Иванов</p>
                                    <p class="introtext">
                                        <?php echo $contents[rand(0,2)]; ?>
                                    </p>
                                </div>
                                <p class="date">Месяц назад</p>
                                <a href="#" class="btn ghost">Посмотреть</a>
                            </div>
                        </div>
                        <?php } ?>
                    </section>
                </div>
            </section>
            <div class="clr"></div>
            <section class="sign-up-mail content-block">
                <p>Подпишитесь на нашу рассылку и всегда будьте в курсе новостей проекта.</p>
                <form action="#" method="POST">
                    <input type="text" class="allow-clear" placeholder="Ваш email" />
                    <input type="submit" class="btn" value="Подписаться">
                </form>
            </section>
            <section class="ask-question content-block">
                <h2>Хотите задать<br />вопрос консультантам?</h2>
                <a href="#" class="btn ghost" id="ask-question">Задать вопрос</a>
                <form action="#" method="POST" class="ask-question-form content-block">
                    <i class="fa fa-close"></i>
                    <h4>Задать вопрос консультантам</h4>
                    <div class="field question">
                        <textarea name="question" placeholder="Напишите Ваш вопрос" class="allow-clear"></textarea>
                        <div class="field category">
                            <select name="category" class="select2" >
                                <option value="0">Растеневодство</option>
                                <option value="1">Животноводство</option>
                            </select>
                        </div>
                        <input type="submit" class="btn" value="Задать вопрос">
                    </div>
                </form>
            </section>
            <div class="clr"></div>
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
                <div class="logo">
                    <img src="images/footer-logo.png" alt="">
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