<link rel="stylesheet" href="css/generate_certs.css" />

<div class="generate-certs">
	<form class="cert-type">
		<div class="field training">
			<label for="training">Тип сертификата:</label>
			<select name="training">
				<option value="0">Духовная интеграционика - уровень 1</option>
				<option value="1">Духовная интеграционика - уровень 2</option>
				<option value="2">Духовная интеграционика - уровень 3</option>
				<option value="3">РПТ - уровень 1</option>
				<option value="4">РПТ - уровень 2</option>
			</select>
		</div>
		<div class="clr"></div>
		<div class="field date">
			<label for="date">Дата проведения:</label>
			<input type="text" class="calendar" name="date" />
		</div>
		<div class="field begindate">
			<label for="begindate">Дата начала:</label>
			<input type="text" class="calendar" name="begindate" />
		</div>
		<div class="field enddate">
			<label for="enddate">Дата окончания:</label>
			<input type="text" class="calendar" name="enddate" />
		</div>
	</form>
	<form action="#" id="uploader" class="hidden">
		<input type="file" name="file" />
	</form>
	<div class="file-upload">
		<h2>Загрузить список участников из файла</h2>
		<a href="#" id="upload-participiant-file" class="btn"><i class="fa fa-upload"></i>Загрузить из файла</a>
		<div class="clr"></div>
		<p class="format">Формат файла .xls, <a href="#">Скачать шаблон файла</a></p>
	</div>
	<form class="participiant-list">
		<h2>Список участников</h2>
		<?php for($i = 0; $i <= 5; $i++) { ?>
		<div class="row">
			<div class="field lastname">
				<label for="lastname[]">Фамилия:</label>
				<input type="text" name="lastname[]" />
			</div>
			<div class="field firstname">
				<label for="firstname[]">Имя:</label>
				<input type="text" name="firstname[]" />
			</div>
			<div class="field email">
				<label for="email[]">Email:</label>
				<input type="text" name="email[]" />
			</div>
			<div class="field phone">
				<label for="phone[]">Телефон:</label>
				<input type="text" name="phone[]" class="phonemask"/>
			</div>
			<a href="#" id="remove-participiant"><i class="fa fa-trash"></i></a>
		</div>
		<?php } ?>
		<a href="#" id="add-participiant"><i class="fa fa-user-plus"></i>Добавить участника</a>
		<input type="submit" value="Сгенерировать и скачать сертификаты" class="btn">
		<div class="clr"></div>
		<p class="endnote"><i class="fa fa-warning"></i>Генерацию нельзя отменить. Проверьте правильность введенных данных до генерации сертификатов.</p>
	</form>
</div>