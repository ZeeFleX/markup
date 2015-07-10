<!DOCTYPE html>

<html>
    <head>
      <meta charset="utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
        <link href="css/landing2.css" rel="stylesheet">
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
    <NOSCRIPT>
        <div class="no-script-layout">
            <div class="wrapper">
                <h1>В настройках вашего браузера отключен JavaScript.</h1>
                <h2>Чтобы продолжить пользоваться сайтом вам необходимо активировать JavaScript в настройках или скачать современный браузер.</h2>
            </div>
        </div>        
    </NOSCRIPT>
    <div class="mainpage">
        <h1>Богатый психолог<br />
        <span>Как стать таким, как Константин Довлатов</span></h1>
        <p class="intro">
            Чтобы стать как К. Довлатов, вам нужно эффективное<br />
            продвижение. Мы создали такую систему специально для<br />
            выпускников Школы коучинга и Тренерского клуба.<br />
            На вас будет работать самый эффективный пси-маркетинг Рунета.
        </p>

        <div class="bottom-container">
            <p class="endnote">
                Регистрируйтесь прямо сейчас. Вы получите бесплатно 14 дней на тарифе “Премиум”.<br />
                За это время вы разберетесь в системе и получите через неё первых клиентов.
            </p>
            <div class="container" style="overflow:hidden">
                <div class="button-container">
                    <div class="button-wrapper">
                        <div class="right-arrows"></div>
                        <a href="#" class="btn">Начать эффективный самопиар</a>
                        <div class="left-arrows"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="clear:both"></div>
    <h2>Тарифы</h2>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Старт</th>
                <th>Лайт</th>
                <th><span class="gold">Премиум</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="key">Клиент видит ваш профиль на портале</td>
                <td><i class="fa fa-minus-circle"></i></td>
                <td><i class="fa fa-minus-circle"></td>
                <td><i class="fa fa-plus-circle"></td>
            </tr>
            <tr>
                <td class="key">Клиент видит ваше расписание на портале</td>
                <td><i class="fa fa-minus-circle"></td>
                <td><i class="fa fa-minus-circle"></td>
                <td><i class="fa fa-plus-circle"></td>
            </tr>
            <tr>
                <td class="key">Клиент может видеть и оставлять отзывы о вашей работе</td>
                <td><i class="fa fa-minus-circle"></td>
                <td><i class="fa fa-minus-circle"></td>
                <td><i class="fa fa-plus-circle"></td>
            </tr>
            <tr>
                <td class="key">Клиент имеет доступ к онлайн-записи к вам на консультацию</td>
                <td><i class="fa fa-minus-circle"></td>
                <td><i class="fa fa-minus-circle"></td>
                <td><i class="fa fa-plus-circle"></td>
            </tr>
            <tr>
                <td class="key">Вы получаете уведомления о новых заявках на консультацию</td>
                <td><i class="fa fa-minus-circle"></td>
                <td><i class="fa fa-minus-circle"></td>
                <td><i class="fa fa-plus-circle"></td>
            </tr>
            <tr>
                <td class="key">Вы можете проводить консультации в онлайн-кабинете</td>
                <td><i class="fa fa-minus-circle"></td>
                <td><i class="fa fa-plus-circle"></td>
                <td><i class="fa fa-plus-circle"></td>
            </tr>
            <tr>
                <td class="key">Вы можете вести собственное расписание консультаций</td>
                <td><i class="fa fa-plus-circle"></td>
                <td><i class="fa fa-plus-circle"></td>
                <td><i class="fa fa-plus-circle"></td>
            </tr>
            <tr>
                <td class="key">Вы можете публиковать свои статьи и материалы</td>
                <td><i class="fa fa-plus-circle"></td>
                <td><i class="fa fa-plus-circle"></td>
                <td><i class="fa fa-plus-circle"></td>
            </tr>
        </tbody>
    </table>
    <div class="footer">
        <p>
            В этой системе собраны эффективные инструменты маркетинга в пси-бизнесе. Над ее созданием<br />
            работает команда профессионалов. Наши специалисты все продумали таким образом, чтобы вы<br />
            просто помогали людям - и получали за это хорошие деньги.<br />
            Всю техническую и маркетинговую работу мы берем на себя.<br />
            Используйте сервис в свое удовольствие!
        </p>
        <div class="button-container">
            <div class="button-wrapper">
                <div class="right-arrows"></div>
                <a href="#" class="btn"><div class="shadow"></div>Начать эффективный самопиар</a>
                <div class="left-arrows"></div>
            </div>
        </div>
    </div>
    <section class="bottom">
        <p class="copyright">Copyright 2015 Онлайн-консультации выпускников школы Довлатова</p>
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
</body>
</html>
<script>
    $(document).ready(function(){
        calc();
    });
    $(window).resize(function(){
        calc();
    });
    function calc(){
        var $mainpage = $('.mainpage');
        var height = $(window).height();
        console.log(height);
        $mainpage.css('height', height + 'px');
    }
</script>