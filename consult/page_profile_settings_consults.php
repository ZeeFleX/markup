<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-profile-settings consults">
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
            <h4>Консультации</h4>
            <div class="content-block">
                <form action="" method="POST">
                    <section class="prices">
                        <div class="private item active">
                            <label class="name" for="private">Личные консультации</label>
                            <input type="checkbox" class="toggle" name="private" checked="checked">
                            <p></p>
                            <div class="clr"></div>
                            <div class="price">
                                <input type="text" name="private-price" />
                                <span>рублей в час</span>
                            </div>
                        </div>
                        <div class="skype item">
                            <label class="name" for="skype">Консультации по Skype</label>
                            <input type="checkbox" class="toggle" name="skype">
                            <p></p>
                            <div class="clr"></div>
                            <div class="price">
                                <input type="text" name="skype-price" />
                                <span>рублей в час</span>
                            </div>
                        </div>
                        <div class="cards item">
                            <label class="name" for="cards">Метафорические карты</label>
                            <input type="checkbox" class="toggle" name="cards">
                            <p></p>
                            <div class="clr"></div>
                            <div class="price">
                                <input type="text" name="cards-price" />
                                <span>рублей в час</span>
                            </div>
                        </div>
                        <div class="clr"></div>
                        <div class="pay-notice">
                            <p>Необходимо оплатить пользование сессионной комнатой. Ваша оплата была дестйительна до <span class="date">10.02.2015</span></p>
                            <a href="#" id="pay" class="btn green">Оплатить</a>
                        </div>
                    </section>
                    <section class="places">
                        <h4>Офисы проведения консультаций</h4>
                        <div class="item">
                            <a href="#" class="remove-place"><i class="fa fa-close"></i></a>
                            <input type="hidden" name="places[]" value="Москва. Ленинский проспект, 17, офис 258"/>
                            <span class="address">Москва. Ленинский проспект, 17, офис 258</span>
                            <input type="radio" name="main-place" value="1" />
                            <label for="main-place">Основной город</label>
                            <div class="clr"></div>
                        </div>
                        <div class="item">
                            <a href="#" class="remove-place"><i class="fa fa-close"></i></a>
                            <input type="hidden" name="places[]" value="Москва. Ленинский проспект, 17, офис 258"/>
                            <span class="address">Москва. Ленинский проспект, 17, офис 258</span>
                            <input type="radio" name="main-place" value="2" checked="checked" />
                            <label for="main-place">Основной город</label>
                            <div class="clr"></div>
                        </div>
                        <input type="text" class="plus autocomplete" id="add-place" placeholder="В каком городе вы работаете?" />
                    </section>
                    <div class="clr"></div>
                    <input type="submit" value="Сохранить изменения" class="btn" />
                    <a href="#" class="btn ghost">Перейти в профиль</a>
                </form>
            </div>
        </section>
        <aside class="additional-menu">
            <h4>Настройки профиля</h4>
            <div class="content-block">
                <ul>
                    <li>
                        <a href="#">Основные настройки</a>
                    </li>
                    <li>
                        <a href="#">Рабочее время</a>
                    </li>
                    <li class="active">
                        <a href="#">Консультации</a>
                    </li>
                    <li>
                        <a href="#">Информация о себе</a>
                    </li>
                    <li>
                        <a href="#">Контакты</a>
                    </li>
                    <li>
                        <a href="#">Партнеры</a>
                    </li>
                    <li>
                        <a href="#">Настройки безопасности</a>
                    </li>
                </ul>
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