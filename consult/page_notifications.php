<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-notifications">
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
                    <li class="active">
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
            <h4>Уведомления</h4>
			<div class="items">
				<div class="item important content-block" data-id="0">
					<div class="indicator"></div>
					<div class="submit">
						<input type="checkbox" name="submit" checked="checked">
					</div>
					<p>К вам на консультацию записался <a href="#">Иванов Иван</a>. Оплата ожидается</p>
				</div>
				<div class="item content-block" data-id="0">
					<div class="indicator"></div>
					<div class="submit">
						<input type="checkbox" name="submit" checked="checked">
					</div>
					<p>К вам на консультацию записался <a href="#">Иванов Иван</a>. Оплата ожидается</p>
				</div>
				<div class="item content-block" data-id="0">
					<div class="indicator"></div>
					<div class="submit">
						<input type="checkbox" name="submit">
					</div>
					<p>К вам на консультацию записался <a href="#">Иванов Иван</a>. Оплата ожидается</p>
				</div>
				<div class="item important content-block" data-id="0">
					<div class="indicator"></div>
					<div class="submit">
						<input type="checkbox" name="submit">
					</div>
					<p>К вам на консультацию записался <a href="#">Иванов Иван</a>. Оплата ожидается</p>
				</div>
			</div>
        </section>
        <aside class="additional-menu">
            <h4>Фильтр уведомлений</h4>
            <div class="content-block">
                <ul>
                    <li class="active">
                        <a href="#">Все</a>
                    </li>
                    <li>
                        <a href="#">Новые уведомления</a>
                    </li>
                    <li>
                        <a href="#">Прочитанные уведомления</a>
                    </li>
                </ul>
                <br>
                <a href="#" class="btn ghost" id="mark-all-as-read">Отметить все как прочитанные</a>
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