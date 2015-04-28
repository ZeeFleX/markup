<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-profile-settings common">
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
            <h4>Основные настройки</h4>
            <div class="content-block">
                <div class="upload-photo">
                    <form action="server_side/uploader.php" enctype="multipart/form-data" id="uploader-form" method="POST">
                        <input type="file" name="file" class="hidden" id="uploader" />
                        <h5>Фото профиля</h5>
                        <div class="clr"></div>
                        <div class="photo-container">
                            <img src="images/interface/image-placeholder.png" alt="" />
                        </div>
                        <div class="control">
                            <input type="button" class="btn ghost" value="Загрузить новое фото" id="new-photo-upload"/>
                            <br />
                            <input type="button" class="btn ghost red" value="Удалить" id="remove-photo" />
                            <p>Макс.размер файла 5MB. (.jpeg, .png)</p>
                        </div>
                        <div class="clr"></div>
                        <div id="crop-image-container">
                            <div id="crop-image-placeholder"></div>
                            <a href="#" class="btn" id="crop-image-button" style="color:#fff">Готово</a>
                        </div>
                        <input type="hidden" id="x1" />
                        <input type="hidden" id="y1" />
                        <input type="hidden" id="x2" />
                        <input type="hidden" id="y2" />
                        <input type="hidden" id="w" />
                        <input type="hidden" id="h" />
                        <input type="hidden" name="action" value="get_preview" />
                    </form>
                    
                    <form action="#" id="profile-settings-form" method="POST">
                        <input type="hidden" name="avatar" />
                        <div class="field firstname">
                            <label for="firstname">Имя</label>
                            <input type="text" name="firstname" class="allow-clear" />
                        </div>
                        <div class="field lastname">
                            <label for="lastname">Фамилия</label>
                            <input type="text" name="lastname" class="allow-clear" />
                        </div>
                        <div class="field middlename">
                            <label for="middlename">Отчество</label>
                            <input type="text" name="middlename" class="allow-clear" />
                        </div>
                        <div class="clr"></div>
                        <div class="field gender">
                            <label for="gender">Пол</label>
                            <select name="gender" class="select2">
                                <option value="male">Мужской</option>
                                <option value="female">Женский</option>
                            </select>
                        </div>
                        <div class="field birthdate">
                            <label>Дата рождения</label>
                            <div class="clr"></div>
                            <div class="day">
                                <select name="birthday" class="select2">
                                    <?php for($i = 1; $i <= 31; $i++) {?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="month">
                                <select name="birthmonth" class="select2">
                                    <?php
                                    $months = Array('Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь');
                                    for($i = 1; $i <= 12; $i++) {?>
                                        <option value="<?php echo $i; ?>"><?php echo $months[$i]; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="year">
                                <select name="birthyear" class="select2">
                                    <?php for($i = 1950; $i <= 1998; $i++) {?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="clr"></div>
                        </div>
                        <div class="field country">
                            <label for="country">Страна</label>
                            <select name="country" class="select2" id="select-country">
                                <option value="0">Россия</option>
                                <option value="1">Украина</option>
                                <option value="2">Казахстан</option>
                                <option value="3">Финляндия</option>
                                <option value="4">Польша</option>
                            </select>
                        </div>
                        <div class="field city">
                            <label for="city">Город</label>
                            <select name="city" class="select2-ajax cities"></select>
                        </div>
                        <div class="clr"></div>
                        <div class="field visibility">
                            <label for="visibility">Режим видимости профиля</label>
                            <div class="radio">
                                <input type="radio" name="visibility" value="0" checked="checked"/>
                                <label for="visibility">Мой профиль видимый для всех пользователей</label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="visibility" value="1" />
                                <label for="visibility">Мой профиль видимый только для моих клиентов</label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="visibility" value="2" />
                                <label for="visibility">Мой профиль невидим для других пользователей</label>
                            </div>
                        </div>
                        <div class="field information">
                            <label for="information">Информация обо мне</label>
                            <textarea name="information" class="allow-clear"></textarea>
                        </div>
                        <input type="submit" class="btn" value="Сохранить изменения" />
                        <a href="#" class="btn ghost">Перейти в профиль</a>
                    </form>
                </div>
            </div>
        </section>
        <aside class="additional-menu">
            <h4>Настройки профиля</h4>
            <div class="content-block">
                <ul>
                    <li class="active">
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