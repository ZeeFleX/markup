<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-library-add-article">
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
        <form action="#" method="POST" multipart-data="true" id="uploader" class="hidden">
            <input type="file" name="preview" />
        </form>
        <form action="#" method="POST" class="content-block article-form">
            <div class="field article-name">
                <label for="name">Название статьи</label>
                <input type="text" placeholder="Введите название статьи" name="name">
            </div>
            <div class="field category">
                <label for="category">Категория статьи</label>
                <select name="category" class="select2">
                    <option value="0">Растеневодство</option>
                    <option value="1">Животноводство</option>
                </select>
            </div>
            <div class="field preview image">
                <input type="hidden" name="preview">
                <label for="preview">Миниатюра статьи <span class="italic">(Отображается на странице просмотра статьи)</span></label>
                <div class="clr"></div>
                <div>
                    <div class="preview-container image-container" id="preview-container"></div>
                    <div class="float-wrapper">
                        <input type="button" class="btn ghost" value="Загрузить новое фото">
                        <input type="button" class="btn ghost red" value="Удалить">
                        <p class="max-size">Макс. размер файла 5Mb (.jpeg, .png)</p>
                    </div>
                </div>
            </div>
            <div class="field teaser image">
                <input type="hidden" name="teaser">
                <label for="teaser">Изображение статьи <span class="italic">(Отображается на странице просмотра статьи)</span></label>
                <div class="clr"></div>
                <div>
                    <div class="teaser-container image-container" id="teaser-container"></div>
                    <div class="float-wrapper">
                        <input type="button" class="btn ghost" value="Загрузить новое фото">
                        <input type="button" class="btn ghost red" value="Удалить">
                        <p class="max-size">Макс. размер файла 5Mb (.jpeg, .png)</p>
                    </div>
                </div>
            </div>
            <div class="field article-content">
                <label for="article-content">Текст статьи</label>
                <textarea name="article-content" placeholder="Введите текст статьи"></textarea>
            </div>
            <input type="submit" class="btn" value="Опубликовать статью">
            <a href="#" class="btn ghost">Отменить</a>
        </form>
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