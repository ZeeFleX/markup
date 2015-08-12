<link rel="stylesheet" href="css/auth_window.css" />

<div class="window login v-center" >
	<div class="top-cap">
		<img src="images/top-cap.png" />
	</div>
	<div class="container">
		<h1>Авторизация</h1>
		<form action="my_certs.php" method="POST">
			<div class="field email">
				<label for="email">Ваш Email:</label>
				<input type="text" name="email" placeholder="Введите адрес вашей электронной почты" />
			</div>
			<div class="field password">
				<label for="password">Ваш пароль:</label>
				<input type="password" name="password" placeholder="Введите ваш пароль" />
			</div>
			<div class="field remember-me">
				<input type="checkbox" name="remember" />
				<label for="remember">Запомнить меня</label>
			</div>
			<a href="forgot_password.php" id="forgot-password">Забыли пароль?</a>
			<input type="submit" class="btn green" value="Войти" />
		</form>
	</div>
	<div class="bottom-cap">
		<img src="images/bottom-cap.png" />
	</div>
</div>