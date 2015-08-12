<link rel="stylesheet" href="css/auth_window.css" />

<div class="window login v-center" >
	<div class="top-cap">
		<img src="images/top-cap.png" />
	</div>
	<div class="container">
		<h1>Восстановление пароля</h1>
		<form action="my_certs.php" method="POST">
			<div class="field email">
				<label for="email">Ваш Email:</label>
				<input type="text" name="email" placeholder="Введите адрес вашей электронной почты" />
			</div>
			<a href="/" id="forgot-password">Я вспомнил(а) пароль</a>
			<div class="clr"></div>
			<input type="submit" class="btn green" value="Восстановить пароль" />
		</form>
	</div>
	<div class="bottom-cap">
		<img src="images/bottom-cap.png" />
	</div>
</div>