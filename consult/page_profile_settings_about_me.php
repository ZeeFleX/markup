<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-profile-settings about-me">
    <form action="server_side/uploader_simple.php" method="POST" enctype="multipart/form-data" id="uploader-form-simple" class="hidden">
        <input type="file" name="file" />
    </form>
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
            <h4>Информация о себе</h4>
            <div class="content-block">
                <div class="message yellow">
                    <p>Данная информация не будет отображаться при просмотре Вашего профиля другими пользователями.</p>
                    <p>Эти данные необходимы, только если вы собираетесь зарегистрироваться на данном сайте как Консультант.</p>
                </div>
                <form action="server_side/save_education.php" method="POST">
                    <section class="specialization">
                        <h4>Специализация</h4>
                        <div class="field checkbox">
                            <input type="checkbox" name="spec1" />
                            <label for="spec1">Проблемные адаптации</label>
                        </div>
                        <div class="field checkbox">
                            <input type="checkbox" name="spec2" />
                            <label for="spec2">Проблемные адаптации</label>
                        </div>
                        <div class="field checkbox">
                            <input type="checkbox" name="spec3" />
                            <label for="spec3">Личностное развитие</label>
                        </div>
                        <div class="field checkbox">
                            <input type="checkbox" name="spec4" />
                            <label for="spec4">Личностный рост</label>
                        </div>
                        <div class="field checkbox">
                            <input type="checkbox" name="spec5" />
                            <label for="spec5">Возрастные кризисы</label>
                        </div>
                        <div class="field checkbox">
                            <input type="checkbox" name="spec6" />
                            <label for="spec6">Кризис возраста</label>
                        </div>
                        <div class="field checkbox">
                            <input type="checkbox" name="spec7" />
                            <label for="spec7">Самореализация</label>
                        </div>
                        <div class="field checkbox">
                            <input type="checkbox" name="spec8" />
                            <label for="spec8">Саморазвитие</label>
                        </div>
                        <div class="clr"></div>
<!--                        <input type="text" name="other[]" class="multirow" />-->
                    </section>
                    <section class="education">
                        <h4>Образование</h4>
                        <a href="#" class="add-document-button" id="add-edu-diplom">Добавить диплом</a>
                    </section>
                    <section class="professional">
                        <h4>Профессионализм</h4>
                        <a href="#" class="add-document-button" id="add-edu-diplom">Добавить Сертификат</a>
                    </section>
                    <section class="begin-date">
                        <h4>Начало практической деятельности</h4>
                        <select name="practice-begin" class="select2">
                            <?php for($i = 1970; $i < 2015; $i++) { ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php }?>
                        </select>
                    </section>
                    <div class="clr"></div>
                    <input type="submit" class="btn" value="Сохранить изменения" />
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
                    <li>
                        <a href="#">Консультации</a>
                    </li>
                    <li class="active">
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