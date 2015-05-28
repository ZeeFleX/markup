<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template">
    <div class="window payment">
        <div class="container">
            <i class="fa fa-close"></i>
            <h1>Оплата</h1>
            <form action="#" method="POST">
                <input type="hidden" name="date">
                <h5>Идентификатор</h5>
                <p>123456789012</p>
                <h5>Стоимость консультации</h5>
                <p class="price">
                    <span class="value">3000</span> <i class="fa fa-ruble"></i>
                </p>
                <h5>Описание заказа</h5>
                <p>Оплата доступа к системе «Онлайн-консультации выпускников школы Довалтова». Тарифный план: <span class="plan">Hide»</span>.</p>
                <h5>Консультант</h5>
                <p>Иванов Иван Иванович</p>
                <h5>Желаемая дата начала действия тарифного плана</h5>
                <div class="calendar">
                    <header>
                        <a href="#"><i class="fa fa-angle-double-left"></i></a>
                        <a href="#"><i class="fa fa-angle-double-right"></i></a>
                        <p class="month">Январь</p>
                        <div class="clr"></div>
                    </header>
                    <div class="container">
                        <section class="day-of-weeks">
                            <div class="item">Пн</div>
                            <div class="item">Вт</div>
                            <div class="item">Ср</div>
                            <div class="item">Чт</div>
                            <div class="item">Пт</div>
                            <div class="item">Сб</div>
                            <div class="item">Вс</div>
                        </section>
                        <section class="day-of-month">
                            <?php
                                $offset = 2;
                                $today = 27;
                                for($i = 1; $i <= $offset; $i++) {
                            ?>
                                <span class="item <?php echo 'empty'; ?>"></span>
                            <?php } ?>
                            <?php for($i = 1; $i <= 31; $i++) {?>
                                <a href="#" data-timestamp="2015-04-<?php echo $i; ?>" class="item <?php if($i == $today) echo 'today'; ?>"><?php echo $i; ?></a>
                            <?php } ?>
                            <div class="clr"></div>
                        </section>
                    </div>
                </div>
                
                <div class="clr"></div>
                <input type="submit" value="Оплатить"  class="btn"/>
                <a href="#" class="btn ghost" id="cancel">Отменить</a>
            </form>
            <p class="endnote">
                Тарифный план начнет действовать либо с указанной Вами даты, либо с даты, следующей за днем получения нами оплаты.
            </p>
        </div>
    </div>
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
            <img src="images/logo.png" alt="">
        </div>
        <div class="project-name">
             <p class="title">Психолог для Вас</p>
             <p class="author">Проект Константина Довлатова</p>
        </div>
       
        <a class="sign-in btn" id="sign-in" href="/">Войти</a>
        <ul class="mainmenu">
            <li><a href="#">Публичные вопросы</a></li>
            <li><a href="#">Консультанты</a></li>
            <li><a href="#">Библиотека</a></li>
        </ul>
    </header>
    <div class="content" >
        <div class="wrapper" style="height:800px">
            
        </div>
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
            <p class="copyright">Copyright 2015 Психолог для Вас</p>
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