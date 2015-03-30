<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-mainpage common">
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
    <div class="content">
        <div class="wrapper">
            <h1>Метафорические Ассоциативные карты</h1>
            <h2>Константина Довлатова</h2>
            <h4>Индивидуальные онлайн консультации</h4>
            <section>
                <div class="log-in" id="authorization-window">
                    <div class="head">
                    </div>
                    <form class="body" action="#" method="POST">
                        <div class="field email">
                            <input type="text" name="email" placeholder="Email" />
                        </div>
                        <div class="field password">
                            <input type="password" name="password" placeholder="Введите ваш пароль" />
                        </div>
                        <input type="submit" class="btn" value="Войти" />
                        <p class="endnote">
                            Нажимая на кнопку «Войти», Вы соглашаетесь с 
                            <a href="#">Политикой конфиденциальности</a>
                            и <a href="#">Условиями пользования сайтом</a>
                        </p>
                        <div class="clr"></div>
                        <div class="field remember-me">
                            <input type="checkbox" name="remember-me" />
                            <label for="remember-me">Запомнить меня</label>
                        </div>
                        <a href="page_password_recovery.php" id="forgot-password">Забыли пароль?</a>
                        <div class="clr"></div>
                    </form>
                    <div class="foot">
                        <p>Не зарегистрированы?</p>
                        <a href="page_sign_up.php" id="sign-up">Пройдите регистрацию</a>
                    </div>
                </div>
                <div class="greetings">
                    <h1>Добро пожаловать</h1>
                    <p>
                        Открой понимание своего внутреннего мира через образы в метафорических картах.
                        
                    </p>
                    <p>
                        Сделай свою жизнь лучше, радостней, счастливей и здоровей.
                    </p>
                    <p>
                        Проработай травмирующие моменты своей жизни более эффективными и менее  болезненные способами с помощью метафорических карт.
                    </p>
                </div>
            </section>
        </div>
    </div>
    <div class="professionals">
        <h4>Профессиональные терапевты</h4>
        <div class="slider">
            <div class="wrapper">
                <?php for($i = 0; $i <= 18; $i++) { ?>
                <div class="item content-block">
                    <div class="photo-container">
                        <a href="#">
                            <img src="images/interface/image-placeholder.png" alt="" />
                        </a>
                    </div>
                    <a href="#" class="username">
                        <span class="lastname">Иванов</span><br />
                        <span>Иван Иванович</span>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="controls-container">
                <div class="controls">
                </div>
            </div>
        </div>
        <a href="#" class="btn" id="show-all-users">Посмотреть всех терапевтов</a>
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