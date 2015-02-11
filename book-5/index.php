<!DOCTYPE html>

<html>
    <head>
		<meta charset="utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="js/main.js"></script>
        <script src="https://www.youtube.com/player_api"></script>
</head>

<body>
    <section class="page">
        <div class="window-container">
            <div class="window">
                <div id="player"></div>
                <div class="close" id="stop"></div>
            </div>
        </div>
        <div class="texture">
            
        </div>
        <video autoplay="autoplay" loop="loop" id="video">
            <source src="video/video.mp4">
        </video>
        <div class="wrapper">
            <h1>
                Видео-семинар Константина Довлатова — <br />
                профессионального психолога и долларового миллионера
            </h1>
            <h2>
                «БЕГСТВО ОТ СЧАСТЬЯ»
            </h2>
            <div class="icon play"></div>
            <p class="endnote">
                Для тех, кто хочет быть здоровым, любимым и богатым 
                уже в этой жизни
            </p>
            <form action="http://dowlatow.justclick.ru/subscribe/process/?rid[0]=seminar" method="POST" target="_blank" id="subscr-form-4673" >
                <input type="text" name="lead_name" placeholder="Введите ваше имя"  onblur='if(this.value=="") this.placeholder="Введите ваше имя"'  onfocus='if(this.placeholder=="Введите ваше имя") this.placeholder=""'/> 
                <input type="text" name="lead_email" placeholder="Введите ваш e-mail" onblur='if(this.value=="") this.placeholder="Введите ваш e-mail"'  onfocus='if(this.placeholder=="Введите ваш e-mail") this.placeholder=""'/> 
                <input type="submit" value="Получить доступ">
            </form>
            <div style="clear:both"></div>
            <p class="confidencial">
                Мы гарантируем полную конфиденциальность<br />ваших личных данных
            </p>
        </div>
    </section>
<div id="clickfrog_counter_container" style="width:0px;height:0px;overflow:hidden;"></div><script type="text/javascript">(function(d, w) {var clickfrog = function() {if(!d.getElementById('clickfrog_js_container')) {var sc = document.createElement('script');sc.type = 'text/javascript';sc.async = true;sc.src = "//stat.clickfrog.ru/c.js?r="+Math.random();sc.id = 'clickfrog_js_container';var c = document.getElementById('clickfrog_counter_container');c.parentNode.insertBefore(sc, c);}};if(w.opera == "[object Opera]"){d.addEventListener("DOMContentLoaded",clickfrog,false);}else {clickfrog();}})(document, window);</script><noscript><div style="width:0px;height:0px;overflow:hidden;"><img src="//stat.clickfrog.ru/no_script.php?img" style="width:0px; height:0px;" alt=""/></div></noscript><script type="text/javascript">var clickfrogru_uidh='03083942f06aac7b92739397121382cc';</script>
<?php 
    include_once('clickfrogru_udp_tcp.php');
?>
</body>
</html>