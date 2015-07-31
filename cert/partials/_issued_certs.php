<link rel="stylesheet" href="css/issued_certs.css" />

<div class="issued-certs">
	<h2>Выданные сертификаты</h2>
	<form class="filter" action="/" method="POST">
		<div class="field lastname">
			<label for="lastname">Фамилия:</label>
			<input type="text" name="lastname" />
		</div>
		<div class="field firstname">
			<label for="firstname">Имя:</label>
			<input type="text" name="firstname" />
		</div>
		<div class="field email">
			<label for="email">Email:</label>
			<input type="text" name="email" />
		</div>
		<div class="field phone">
			<label for="phone">Телефон:</label>
			<input type="text" name="phone" />
		</div>
		<div class="field date">
			<label for="date">Дата проведения:</label>
			<input type="text" name="date" class="calendar" />
		</div>
		<div class="field begindate">
			<label for="begindate">Дата начала:</label>
			<input type="text" name="begindate" class="calendar" />
		</div>
		<div class="field enddate">
			<label for="enddate">Дата окончания:</label>
			<input type="text" name="enddate" class="calendar" />
		</div>
	</form>
	<div class="table-container">
		<table class="certs-list">
			<thead>
				<tr>
					<th>Фамилия</th>
					<th>Имя</th>
					<th>Email</th>
					<th>Телефон</th>
					<th>Дата проведения</th>
					<th>Дата начала</th>
					<th>Дата окончания</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php for($i = 0; $i < 10; $i++) { ?>
				<tr>
					<td>Чумак</td>
					<td>Филипп</td>
					<td>fil146@yandex.ru</td>
					<td>8 (925) 620 02 19</td>
					<td>22.01.15</td>
					<td>22.01.15</td>
					<td>22.01.15</td>
					<td>
						<a href="#" id="download"><i class="fa fa-download"></i></a>
						<a href="#" id="online"><i class="fa fa-search"></i></a>
						<a href="#" id="block"><i class="fa fa-lock"></i></a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>