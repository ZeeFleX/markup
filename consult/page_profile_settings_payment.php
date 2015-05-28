<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template page-profile-settings payment">
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
            <div class="payment-block">
                <h4>Оплата</h4>
                <div class="content-block">
                    <div class="plan basic">
                        <h4><span>Действующий план</span></h4>
                        <p class="title">Hide</p>
                        <p class="price"><span class="value">2000 руб.</span> / месяц</p>
                        <p class="status"><i class="fa fa-check"></i> Подписка оформлена</p>
                        <!-- <a href="#" class="btn payment-button">Оплатить</a> -->
                    </div>
                    <div class="plan expert">
                        <h4><span>Перейдите на экспертный план</span></h4>
                        <p class="title">Premium</p>
                        <p class="price"><span class="value">5000 руб.</span> / месяц</p>
                        <!-- <p class="status"><i class="fa fa-check"></i> Подписка оформлена</p> -->
                        <a href="#" class="btn payment-button">Оплатить</a>
                    </div>
                    <div class="clr"></div>
                    <p class="agreement">Оплачивая пользование сайтом по какому-либо тарифу, Вы подтверждаете факт ознакомления и согласия с условиями договора <a href="#">Публичной оферты.</a></p>
                    <div class="info">
                        <i class="fa fa-info-circle"></i>
                        <div class="text">
                            <p>Оплата в сумме 2000 рублей была внесена 13.08.2017. Тариф «Базовый» действует до <span class="date">13.09.2017</span>.</p>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="tarification-block">
                <h4>Сравнение тарифных планов</h4>
                <div class="content-block">
                    <table>
                        <thead>
                            <tr>
                                <th class="func">Функционал</th>
                                <th style="text-align: center;">Free</th>
                                <th style="text-align: center;">Hide</th>
                                <th style="text-align: center;">Premium</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="func">Создание, редактирование и удаление материалов Библиотеки</td>
                                <td><i class="fa fa-check"></i></td>
                                <td><i class="fa fa-check"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="func">Создание, редактирование и удаление ответов и комментариев на вопросы консультантам</td>
                                <td><i class="fa fa-check"></i></td>
                                <td><i class="fa fa-check"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="func">Редактирование расписания личного рабочего времени с указанием возможности проведения консультаций разных типов (личные встречи,  Skype, онлайн-кабинет)</td>
                                <td><i class="fa fa-check"></i></td>
                                <td><i class="fa fa-check"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="func">Проведение консультаций на площадке сайта (онлайн-кабинет)</td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-check"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="func">Назначение консультаций для посторонних клиентов</td>
                                <td><i class="fa fa-times"></td>
                                <td><i class="fa fa-check"></i><br /><span class="endnote">Только онлайн-кабинет</span></td>
                                <td><i class="fa fa-check"></i><br /><span class="endnote">Все типы консультаций</span></td>
                            </tr>
                            <tr>
                                <td class="func">Назначение консультаций для пользователей сайта</td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="func">Уведомления о новых записях на консультацию</td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="func">Пользователи сайта видят Ваше расписание и могут записаться на консультацию онлайн</td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="func">Обмен сообщениями с клиентом по поводу назначенной консультации</td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="func">Ваш профиль отображается в общем списке консультантов</td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="func">Информация Вашего профиля видима для всех пользоватей сайта</td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="func">Отзывы о вас видны всем пользователям сайта</td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="func">Блокирование функции создания отзывов конкретным Участником о Вас</td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="func">Просмотр, создание, удаление и редактирование  отзывов о других пользователях сайта</td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="func">Создание, редактирование и удаление личных заметок о своих клиентах</td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="func">Обмен личными сообщениями с другими пользователями сайта</td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="func">Выбор своего статуса на сайте: "видимый для всех" или "видимый только для своих клиентов"</td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-times"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="func"></td>
                                <td><span class="bold">Бесплатно</span></td>
                                <td><span class="bold">2000 руб.</span><br /> в месяц</td>
                                <td><span class="bold">5000 руб.</span><br /> в месяц</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
                        <a href="#">Оплата</a>
                    </li>
                    <li class="">
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