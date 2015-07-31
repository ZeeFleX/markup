<link rel="stylesheet" href="css/change_password.css" />

<div class="change-password">
	<div class="profile-snippet">
		<div class="img-container">
			<img src="images/photos/placeholder.png" alt="">
		</div>
		<div class="about">
			<p class="name">Иван Иванов</p>
			<p class="job">Тренер</p>
		</div>
	</div>
	
	<form action="#" id="change-password-form">
		<h2>Смена пароля</h2>
		<div class="field old-password">
			<label for="old-password">Старый пароль:</label>
			<input type="password" name="old-password" required />
		</div>
		<div class="field new-password">
			<label for="new-password">Новый пароль:</label>
			<input type="password" name="new-password" required />
		</div>
		<div class="field confirm-password">
			<label for="confirm-password">Подтвердите новый пароль:</label>
			<input type="password" name="confirm-password" required />
		</div>
		<div class="clr"></div>
		<input type="submit" class="btn" value="Сохранить изменения">
	</form>
</div>