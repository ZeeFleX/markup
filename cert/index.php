<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/interface.css" />
		<link rel="stylesheet" href="css/layout.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/angular.min.js"></script>
		<script src="js/app.js"></script>
		<script src="js/interface.js"></script>
	</head>
	<body>
		<header>
			<a href="/" class="logo">Сервис сертификации Константина Довлатова</a>
			<div class="profile-snippet">
	            <div class="photo-container">
	                <img src="images/photos/placeholder.png" />
	            </div>
	            <div class="info">
	                <div class="name"><a href="profile_trainer.php">Иванов Иван</a></div>
	                <div class="job">Консультант</div>
	            </div>
	            <!-- <div class="more-container">
	                <i class="fa fa-caret-down"></i>
	                <div class="dropdown-menu">
	                    <ul>
	                        <a href="#">Выйти</a>
	                    </ul>
	                </div>
	            </div> -->
	            <a href="/" id="logout">
	            	<i class="fa fa-sign-out"></i>
	            </a>
	        </div>
	        <ul class="menu">
				<li><a href="generate_certs.php">Генерация сертификатов</a></li>
				<li><a href="my_certs.php">Мои сертификаты</a></li>
				<li><a href="trainers.php">Тренеры</a></li>
			</ul>
		</header>
		<div class="clr"></div>
		<div class="content-container">
			<?php include('partials/_auth_window.php'); ?>
		</div>
		<footer>
			<span class="copyright">Copyright 2015 ООО "Интеграционика  |  </span>
			<span class="support">Служба поддержки: <a href="mailto:support@certificate.ru">support@certificate.ru</a></span>
			<ul class="menu">
				<li><a href="/">О сервисе</a></li>
				<li><a href="/">Условия использования</a></li>
			</ul>
		</footer>
	</body>
</html>