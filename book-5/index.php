<!DOCTYPE html>

<html>
    <head>
		<meta charset="utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet/less" type="text/css" href="less/styles.less">
        <!-- <link rel="stylesheet" type="text/css" href="css/styles.css"> -->
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="js/less.min.js"></script>
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
            <form action="index.php">
                <input type="text" placeholder="Ваше имя" name="name">
                <input type="text" placeholder="Ваше email" name="email">
                <input type="submit" value="Получить доступ">
            </form>
            <div style="clear:both"></div>
            <p class="confidencial">
                Мы гарантируем полную конфиденциальность<br />ваших личных данных
            </p>
        </div>
    </section>
</body>
</html>