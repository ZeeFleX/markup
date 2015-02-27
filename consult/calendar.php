<!DOCTYPE html>

<html>
    <head>
		<?php include_once('_head.php'); ?>
</head>
<body class="default-template">
    <div class="wrapper">
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
                        <span class="item <?php echo 'empty'; ?> <?php if($offset % 7 == 6 || $offset % 7 == 0) echo 'weekend'; ?> "></span>
                    <?php } ?>
                    <?php for($i = 1; $i <= 31; $i++) {?>
                        <a href="#" class="item <?php if(($i + $offset) % 7 == 6 || ($i + $offset) % 7 == 0) echo 'weekend'; ?> <?php if($i == $today) echo 'today'; ?>"><?php echo $i; ?></a>
                    <?php } ?>
                    <div class="clr"></div>
                </section>
            </div>
        </div>
    </div>
</body>
</html>