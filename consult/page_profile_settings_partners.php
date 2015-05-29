<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-profile-settings partners">
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
            <h4>Партнеры</h4>
            <form action="server_side/get_preview.php" method="POST" multipart-data="true" id="uploader" class="hidden">
                <input type="file" name="preview" />
            </form>
            <form action="server_side/set_partners.php" method="POST" class="partners-form content-block">
                <div class="partners">
                    <div class="partner">
                        <i class="fa fa-times-circle-o"></i>
                        <div class="field type">
                            <input type="hidden" name="type[]">
                            <ul>
                                <li class="active" data-type="code">Код баннера</li>
                                <li data-type="text">Текстовый баннер</li>
                            </ul>
                        </div>
                        <div class="clr"></div>
                        <div class="field code group-code">
                            <label for="code">Вставка кода баннера</label>
                            <textarea class="allow-clear" name="bannercode[]" placeholder="Вставьте код баннера"></textarea>
                        </div>
                        <div class="field name group-text">
                            <label for="name">Название партнера</label>
                            <input type="text" name="name[]" placeholder="Введите название партнера">
                        </div>
                        <div class="field link group-text">
                            <label for="link">Ссылка на сайт партнера</label>
                            <input type="text" name="link[]" placeholder="Вставьте ссылку">
                        </div>
                        <div class="clr"></div>
                        <div class="field image group-text">
                            <input type="hidden" name="image[]">
                            <div>
                                <div class="image-container" id="image-container"></div>
                                <div class="float-wrapper">
                                    <input type="button" class="btn ghost" id="upload-image" value="Загрузить изображение">
                                    <input type="button" class="btn ghost red" id="remove-image" value="Удалить">
                                    <!-- <p class="max-size">Макс. размер файла 5Mb (.jpeg, .png)</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="clr"></div>
                    </div>
                </div>

                <a href="#" id="add-partner">Добавить партнера</a>
                <input type="submit" value="Сохранить изменения" class="btn">
                <a href="#" class="btn ghost">Перейти в профиль</a>
            </form>
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
                    <li>
                        <a href="#">Консультации</a>
                    </li>
                    <li>
                        <a href="#">Информация о себе</a>
                    </li>
                    <li>
                        <a href="#">Контакты</a>
                    </li>
                    <li class="active">
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