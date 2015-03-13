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
                        <li><a href="#">Мой профиль</a></li>
                        <li><a href="#">Настройки профиля</a></li>
                        <li><a href="#">Выйти</a></li>
                        
                    </ul>
                </div>
            </div>
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
                        <div id="crop-image-container">
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
                        <a href="#">Контакты</a>
                    </li>
                    <li>
                        <a href="#">Настройки безопасности</a>
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