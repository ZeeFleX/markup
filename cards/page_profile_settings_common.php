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
        <div class="logo">
            <img src="images/logo.png" />
        </div>
        <p class="title">Метафорические Ассоциативные Карты<br/><span>Константина Довлатова</span></p>
        <div class="profile-snippet">
            <div class="photo-container">
                <img src="images/photos/01.jpg" />
            </div>
            <div class="info">
                <div class="name">Братанова Мария</div>
                <div class="job">Терапевт</div>
            </div>
            <div class="more-container">
                <i class="fa fa-caret-down"></i>
                <div class="dropdown-menu">
                    <ul>
                        <li class="arrow"></li>
                        <li><a href="page_profile.php">Мой профиль</a></li>
                        <li><a href="page_profile_settings_common.php">Настройки профиля</a></li>
                        <li><a href="mainpage.php">Выйти</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mainmenu">
            <ul>
                <li>
                    <a href="page_list.php">Терапевты</a>
                </li>
            </ul>
        </div>
    </header>
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
                            <input type="button" class="btn ghost red" value="Загрузить новое фото" id="new-photo-upload"/>
                            <br />
                            <input type="button" class="btn ghost red" value="Удалить" id="remove-photo" />
                            <p>Макс.размер файла 5MB. (.jpeg, .png)</p>
                        </div>
                        <div class="clr"></div>
                        <div id="crop-image-container" style="margin-top: 25px;">
                            <div id="crop-image-placeholder"></div>
                            <a href="#" class="btn" id="crop-image-button" style="color:#fff; text-align: center; display: block; margin-top: 20px;">Готово</a>
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
                    <li>
                        <a href="page_profile_settings_common.php">Основные настройки</a>
                    </li>
                    <li class="active">
                        <a href="page_profile_settings_about_me.php">Информация о себе</a>
                    </li>
                    <li>
                        <a href="page_profile_settings_contacts.php">Контакты</a>
                    </li>
                    <li>
                        <a href="page_profile_settings_security.php">Настройки безопасности</a>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
  <footer class="footer">
        <div class="top">
            <div class="footer-logo">
                <div class="logo">
                    <img src="images/footer-logo.png" />
                </div>
                <p class="title">Метафорические Ассоциативные Карты<br/><span>Константина Довлатова</span></p>
            </div>
            <div class="clr"></div>
            <p class="contact">ИП Довлатов Константин Николаевич<br />ОГРН 309774619400751</p>
            <p class="support">Служба технической поддержки: <a href="mailto:support@dowlatow.ru">support@dowlatow.ru</a></p>
        </div>
        <div class="bottom">
            <p>Copyright 2015 Карточный сервис</p>
            <ul class="footer-menu">
                <li><a href="#">О сервисе</a></li>
                <li><a href="#">Политика конфиденциальности</a></li>
                <li><a href="#">Условия пользования сайтом</a></li>
                <li><a href="#">Оферта</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>