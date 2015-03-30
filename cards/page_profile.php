<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-profile">
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
    <section class="resume-section">
        <div class="wrapper">
            <div class="profile content-block">
                <div class="left">
                    <div class="photo">
                        <img src="images/photos/01.jpg" alt="" />
                    </div>
                    <p class="place"><i class="fa fa-map-marker"></i> Россия, Москва</p>
                    <div class="expirience">
                        <i class="fa fa-suitcase"></i>
                        <p>Стаж: <span class="value">6 лет</span></p>
                    </div>
                </div>
                <div class="right">
                    <header>
                        <div class="name">
                            <p class="lastname">Братанова</p>
                            <p class="firstname">Мария Петровна</p>
                            <p class="job">Терапевт</p>
                        </div>
                        <div class="toolbar">
                            <div class="profile-menu">
                                <a href="#" class="dotts">
                                    <i class="fa fa-circle"></i>
                                    <i class="fa fa-circle"></i>
                                    <i class="fa fa-circle"></i>
                                    <span class="clr"></span>
                                </a>
                            </div>
                        </div>
                    </header>
                    <div class="contacts">
                        <h5>Контакты</h5>
                        <p>Skype: <span class="value">bratanova</span></p>
                        <p>Телефон: <span class="value">+7 999 99 99</span></p>
                        <p>E-mail: <span class="value">bratanova@gmail.com</span></p>
                    </div>
                    <div class="introtext">
                        <p>
                            Идейные активности позволяет выполнять важные задания по разработке модели развития. позволяет выполнять важные задания по разработке по разработке  модели развития...
                        </p>
                    </div>
                </div>
            </div>
            <aside>
                <div class="price">
                    <h4>Оплата</h4>
                    <div class="content-block not-paid">
                        <p class="text">
                            Необходимо оплатить пользование сессионной комнатой. Ваша предыдущая оплата была действительна до <span class="date">10.02.2015</span>
                        </p>
                        <form class="summary">
                            <div class="field">
                                <input type="radio" name="summ" checked="checked" value="5000" />
                                <label for="summ">
                                    <span class="value">5000 рублей в месяц</span> <span>(Ваш профиль будет виден в общем списке терапевтов и доступен для просмотра всеми пользователями сайта)</span>
                                </label>
                            </div>
                            <div class="field">
                                <input type="radio" name="summ" value="2000" />
                                <label for="summ">
                                    <span class="value">2000 рублей в месяц</span> <span>(Ваш профиль не будет виден никаким  пользователям сайта, кроме вас самих)</span>
                                </label>
                            </div>
                            <input type="submit" class="btn green" value="Оплатить">
                        </form>
                    </div>
                    <div class="content-block paid">
                        <p class="text">
                            Оплата в сумме <span class="value">5 000 рублей</span> была внесена <span class="date">01.03.2015</span>. Вы можете пользоваться сессионной комнатой до <span class="date">01.04.2015</span>.
                        </p>
                        <div class="visibility">
                            <i class="fa fa-eye"></i>
                            <p>Ваш профиль видят все пользователи сайта</p>
                        </div>
                    </div>
                </div>
                <div class="sessions">
                    <h4>Сессии</h4>
                    <div class="content-block">
                        <p class="bold">Созданных сессий: <span class="value">8</span></p>
                        <a href="#" class="btn">Записаться на консультацию</a>
                    </div>
                </div>
                <div class="information">
                    <h4>Информация о терапевте</h4>
                    <div class="content-block education-list">
                        <div class="specialization">
                            <h5>Специализация</h5>
                            <ul class="badge-marked">
                                <li>Развитие способностей</li>
                                <li>Развитие карьеры</li>
                                <li>Азартные игры</li>
                                <li>Разрешение конфликтов</li>
                            </ul>
                        </div>
                        <div class="education">
                            <h5>Образование</h5>
                            <div class="education-list">
                                <div class="item">
                                    <div class="scan">
                                        <img src="images/scan/scan01.jpg" alt="" />
                                    </div>
                                    <p class="title">
                                        2004-2009 гг. – ВГМА (Воронежская Государственная Медицинская Академия) им. Н.Н. Бурденко по специальности психология, диплом с отличием;
                                    </p>
                                    <div class="clr"></div>
                                </div>
                            </div>
                        </div>
                        <div class="professional">
                            <h5>Профессионализм</h5>
                            <div class="professions-list">
                                <div class="item">
                                    <div class="scan">
                                        <img src="images/scan/scan01.jpg" alt="" />
                                    </div>
                                    <p class="title">
                                        2007 – курсы компании 3M, получен сертификат;
                                    </p>
                                    <div class="clr"></div>
                                </div>
                                <div class="item">
                                    <div class="scan">
                                        <img src="images/scan/scan01.jpg" alt="" />
                                    </div>
                                    <p class="title">
                                        2010 – участие в конгрессе Alpha Bio Tec по психологическим техникам– Израиль, получен сертификат;
                                    </p>
                                    <div class="clr"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clr"></div>
            </aside>
            <div class="clr"></div>
        </div>
    </section>
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