<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
        <!-- <script src="js/mosaic.js"></script> -->
</head>
<body class="default-template page-library">
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
        <section class="resume content-block">
            <div class="left">
                <div class="photo">
                    <img src="images/photos/01.jpg" alt="" />
                </div>
            </div>
            <div class="right">
                <header>
                    <div class="name">
                        <p class="lastname"><a href="#">Братанова</a></p>
                        <p class="firstname"><a href="#">Мария Петровна</a></p>
                        <p class="job">Консультант <span class="age">35 лет</span></p>
                    </div>
                    <div class="rating-block">
                        <p class="value"><span class="current-value">8</span>/10</p>
                        <p class="title"><span>Рейтинг</span></p>
                    </div>
                </header>
                <a href="#" class="btn">Записаться на консультацию</a>
            </div>
        </section>
        <section class="search-article content-block">
            <form action="#" method="POST">
                <div class="left">
                    <div class="field string">
                        <input type="text" name="string" placeholder="Поиск..." class="allow-clear">
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="right">
                    <input type="submit" class="btn yellow" value="Найти">
                </div>
                <div class="clr"></div>
                <div class="field category">
                    <select name="category" id="" class="select2">
                        <option value="0">Выберите категорию</option>
                        <option value="1">Растеневодство</option>
                    </select>
                </div>
            </form>
        </section>
        <div class="clr"></div>
        <section class="articles-flow four-columns">
            <?php 
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
                for($i = 0; $i <= 10; $i++) {
                    $img = rand(0,1);
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