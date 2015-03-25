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
    <!-- <section class="user-menu-section">
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
    </section> -->
    <div class="wrapper">
        <section class="content">
            <h4>Информация о себе</h4>
            <div class="content-block">
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
                    <div class="items">
                        <div class="item" data-id="0">
                            <div class="controls">
                                <i class="fa fa-times-circle-o"></i>
                                <i class="fa fa-pencil"></i>
                            </div>
                            <div class="scan-container data" data-key="scan-link" data-value="images/scan/scan01.jpg">
                                <img src="images/scan/scan01.jpg" alt="" />
                            </div>
                            <div class="info">
                                <p class="name data" data-key="name" data-value="ВГМА (Воронежская Государственная Медицинская Академия) им. Н.Н. Бурденко"><span class="bold key">Учебное заведение:</span> <span class="value">ВГМА (Воронежская Государственная Медицинская Академия) им. Н.Н. Бурденко</span></p>
                                <p class="special data" data-key="special" data-value="Психология"><span class="bold key">Специальность:</span> <span class="value">Психология</span></p>
                                <p class="quality data" data-key="quality" data-value="Психолог"><span class="bold key">Квалификация:</span> <span class="value">Психолог</span></p>
                                <p class="period"><span class="bold key">Период обучения:</span> <span class="value begin data" data-key="begin" data-value="2008">2008</span> - <span class="value end data" data-key="end" data-value="2011">2011</span></p>
                            </div>
                        </div>
                        <div class="item" data-id="1">
                            <div class="controls">
                                <i class="fa fa-times-circle-o"></i>
                                <i class="fa fa-pencil"></i>
                            </div>
                            <div class="scan-container data" data-key="scan-link" data-value="images/scan/scan01.jpg">
                                <img src="images/scan/scan01.jpg" alt="" />
                            </div>
                            <div class="info">
                                <p class="name data" data-key="name" data-value="ВГМА (Воронежская Государственная Медицинская Академия) им. Н.Н. Бурденко"><span class="bold key">Учебное заведение:</span> <span class="value">ВГМА (Воронежская Государственная Медицинская Академия) им. Н.Н. Бурденко</span></p>
                                <p class="special data" data-key="special" data-value="Психология"><span class="bold key">Специальность:</span> <span class="value">Психология</span></p>
                                <p class="quality data" data-key="quality" data-value="Психолог"><span class="bold key">Квалификация:</span> <span class="value">Психолог</span></p>
                                <p class="period"><span class="bold key">Период обучения:</span> <span class="value begin data" data-key="begin" data-value="2008">2008</span> - <span class="value end data" data-key="end" data-value="2011">2011</span></p>
                            </div>
                        </div>
                    </div>
                    <form class="university">
                        <h5>Название ВУЗа</h5>
                        <input type="text" class="allow-clear" name="name" placeholder="Введите название Вашего учебного заведения" />
                        <div class="clr"></div>
                        <div class="field special">
                            <h5>Специальность</h5>
                            <input type="text" class="allow-clear" name="special" placeholder="Введите специальность" />
                        </div>
                        <div class="field quality">
                            <h5>Квалификация</h5>
                            <input type="text" class="allow-clear" name="quality" placeholder="Введите квалификацию" />
                        </div>
                        <div class="clr"></div>
                        <h5>Период обучения</h5>
                        <select name="begin" class="select2">
                            <?php for($i = 1970; $i < 2015; $i++){ ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select name="end" class="select2">
                            <?php
                                
                                for($i = 1970; $i < 2015; $i++){ ?>
                                <option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <div class="clr"></div>
                        <h5>Диплом</h5>
                        <div class="field upload">
                            <input type="hidden" class="filename" name="univers[file]" />
                            <div class="preview">
                                <img src="images/interface/image-placeholder.png" alt="" />
                            </div>
                            <div class="buttons">
                                <input type="button" class="btn ghost upload-scan" id="upload-edu-diplom" value="Загрузить фото диплома" />
                                <br>
                                <input type="button" class="btn ghost red remove-scan" id="remove-edu-diplom" value="Удалить" />
                            </div>
                            <p>Макс. размер файла 5Mb, (.jpeg, .png)</p><div class="clr"></div>
                        </div>
                        <input type="submit" class="add-document-button" id="add-edu-diplom" value="Добавить диплом">
                    </form>
                </section>
                <section class="professional">
                    <h4>Профессионализм</h4>
                    <div class="items">
                        <div class="item" data-id="0">
                            <div class="controls">
                                <i class="fa fa-times-circle-o"></i>
                                <i class="fa fa-pencil"></i>
                            </div>
                            <div class="scan-container data" data-key="scan-link" data-value="images/scan/scan01.jpg">
                                <img src="images/scan/scan01.jpg" alt="" />
                            </div>
                            <div class="info">
                                <p class="name data" data-key="name" data-value="ВГМА (Воронежская Государственная Медицинская Академия) им. Н.Н. Бурденко"><span class="bold key">Учебное заведение:</span> <span class="value">ВГМА (Воронежская Государственная Медицинская Академия) им. Н.Н. Бурденко</span></p>
                                <p class="special data" data-key="special" data-value="Психология"><span class="bold key">Специальность:</span> <span class="value">Психология</span></p>
                                <p class="quality data" data-key="quality" data-value="Психолог"><span class="bold key">Квалификация:</span> <span class="value">Психолог</span></p>
                                <p class="period"><span class="bold key">Период обучения:</span> <span class="value begin data" data-key="begin" data-value="2008">2008</span> - <span class="value end data" data-key="end" data-value="2011">2011</span></p>
                            </div>
                        </div>
                        <div class="item" data-id="1">
                            <div class="controls">
                                <i class="fa fa-times-circle-o"></i>
                                <i class="fa fa-pencil"></i>
                            </div>
                            <div class="scan-container data" data-key="scan-link" data-value="images/scan/scan01.jpg">
                                <img src="images/scan/scan01.jpg" alt="" />
                            </div>
                            <div class="info">
                                <p class="name data" data-key="name" data-value="ВГМА (Воронежская Государственная Медицинская Академия) им. Н.Н. Бурденко"><span class="bold key">Учебное заведение:</span> <span class="value">ВГМА (Воронежская Государственная Медицинская Академия) им. Н.Н. Бурденко</span></p>
                                <p class="special data" data-key="special" data-value="Психология"><span class="bold key">Специальность:</span> <span class="value">Психология</span></p>
                                <p class="quality data" data-key="quality" data-value="Психолог"><span class="bold key">Квалификация:</span> <span class="value">Психолог</span></p>
                                <p class="period"><span class="bold key">Период обучения:</span> <span class="value begin data" data-key="begin" data-value="2008">2008</span> - <span class="value end data" data-key="end" data-value="2011">2011</span></p>
                            </div>
                        </div>
                    </div>
                    <form class="cert">
                        <h5>Название курса или семинара</h5>
                        <input type="text" class="allow-clear" name="name" placeholder="Введите название Вашего учебного заведения" />
                        <div class="clr"></div>
                        <div class="field quality">
                            <h5>Квалификация</h5>
                            <input type="text" class="allow-clear" name="quality" placeholder="Введите квалификацию" />
                        </div>
                        <div class="field year">
                            <h5>Год получения</h5>
                            <select name="year" class="select2">
                                <?php for($i = 1970; $i <= 2015; $i++){ ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="clr"></div>
                        <h5>Диплом</h5>
                        <div class="field upload">
                            <input type="hidden" class="filename" name="univers[file]" />
                            <div class="preview">
                                <img src="images/interface/image-placeholder.png" alt="" />
                            </div>
                            <div class="buttons">
                                <input type="button" class="btn ghost upload-scan" id="upload-edu-diplom" value="Загрузить фото диплома" />
                                <br>
                                <input type="button" class="btn ghost red remove-scan" id="remove-edu-diplom" value="Удалить" />
                            </div>
                            <p>Макс. размер файла 5Mb, (.jpeg, .png)</p><div class="clr"></div>
                        </div>
                        <input type="submit" class="add-document-button" id="add-edu-diplom" value="Добавить сертификат">
                    </form>
                </section>
                <section class="begin-date">
                    <h4>Начало практической деятельности</h4>
                    <select name="practice-begin" class="select2">
                        <?php for($i = 1970; $i <= 2015; $i++) { ?>
                        <option value="<?php echo $i; ?>" <?php if($i == date_format(date_create(), 'Y')) echo 'selected="selected"'; ?>><?php echo $i; ?></option>
                        <?php }?>
                    </select>
                </section>
                <div class="clr"></div>
                <input type="submit" class="btn" value="Сохранить изменения" />
                <a href="#" class="btn ghost">Перейти в профиль</a>
            </div>
        </section>
        <aside class="additional-menu">
            <h4>Настройки профиля</h4>
            <div class="content-block">
                <ul>
                    <li>
                        <a href="#">Основные настройки</a>
                    </li>
                    <li class="active">
                        <a href="#">Информация о себе</a>
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