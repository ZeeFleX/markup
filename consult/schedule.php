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
    <div class="schedule-container content-block">
        <div class="hours">
            <?php for($i = 0; $i <= 23; $i++) { ?>
                <?php
                    if($i < 10) {$title = '0' . $i . ':00';} else{$title = $i . ':00';}
                ?>
                <div class="hour"><?php echo $title; ?></div>
            <?php } ?>
        </div>
        <div class="grid">
            <div class="marker"></div>
            <?php for($i = 1; $i <= 48; $i++) { ?>
                <div class="row" data-time="<?php echo $i; ?>"></div>
            <?php } ?>
        </div>
        <div class="clr"></div>
    </div>
    <form action="#">
        <input type="text" class="timepicker" id="begin-time"/>
        <input type="text" class="timepicker" id="end-time"/>
    </form>
</body>
</html>