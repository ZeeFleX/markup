<?php
	$day = $_POST['date'];
	$schedule = Array(
		Array(
			'id' => 12,
			'time' => Array('6-00', '8-30'),
			'title' => 'Консультация с Ивановым',
			'method' => 'private',
			'participiant' => 'Иванов Владимир',
			'participiantProfile' => '#'
		),
		Array(
			'id' => 13,
			'time' => Array('12-00', '15-30'),
			'title' => 'Консультация по скайпу',
			'method' => 'skype',
			'participiant' => 'Петрова Анна',
			'participiantProfile' => '#'
		),
	);
	echo json_encode($schedule);
?>