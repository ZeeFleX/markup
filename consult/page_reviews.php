<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-reviews">
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
        <section class="reviews">
            <div class="reviews">
                <h4>Отзывы о консультанте</h4>
                <div class="content-block reviews-list">
                    <div class="review dashed b-radius">
                        <div class="quote-arrow"></div>
                        <p class="content">
                            Повседневная практика показывает, что укрепление и развитие структуры в значительной степени обуславливает создание модели развития. Повседневная практика показывает, что рамки и место обучения кадров представляет собой интересный эксперимент проверки существенных финансовых и административных условий.
                        </p>
                        <div class="rating-field" data-value="8" data-scale="10"></div>
                        <div class="author">
                            <div class="photo">
                                <img src="images/photos/02.jpg" alt="" />
                            </div>
                            <div class="text">
                                <p>
                                    <span class="author-name">Иван Иванов</span> оставил отзыв о консультанте <span class="user-name">Братановой Марии</span>
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
                        <div class="rating-field" data-value="3" data-scale="10"></div>
                        <div class="author">
                            <div class="photo">
                                <img src="images/photos/02.jpg" alt="" />
                            </div>
                            <div class="text">
                                <p>
                                    <span class="author-name">Иван Иванов</span> оставил отзыв о консультанте <span class="user-name">Братановой Марии</span>
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
            </div>
        </section>
        <aside>
            <div class="search-reviews">
                <h4>Поиск отзывов</h4>
                <div class="content-block choose-user">
                    <h5>Выберите консультанта</h5>
                    <select name="user" class="select2">
                        <option value="0">Братанова Мария</option>
                    </select>
                </div>
            </div>
            <div class="write-review">
                <h4>Написать отзыв о консультанте</h4>
                <div class="content-block write-review">
                    <form action="index.html" method="POST">
                        <div class="field">
                            <label for="user">Выберите консультанта</label>
                            <select name="user" class="select2">
                                <option value="0">Братанова Машка</option>
                            </select>
                        </div>
                        <div class="field">
                            <textarea name="review-content" class="allow-clear" placeholder="Напишите что-то хорошее о консультанте"></textarea>
                        </div>
                        <div class="field">
                            <label>Оцените консультанта</label>
                            <input type="hidden" name="rating" value="0" data-scale="10" />
                        </div>
                        <input type="submit" class="btn" value="Добавить отзыв" />
                    </form>
                </div>
            </div>
        </aside>
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