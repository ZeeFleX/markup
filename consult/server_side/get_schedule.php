<?php
	$day = $_POST['date'];
	$schedule = Array(
		Array(
			'id' => 12,
			'time' => Array('12-00', '14-30'),
			'title' => 'Консультация с Ивановым',
			'method' => 'private',
			'participiant' => 'Иванов Владимир',
			'participiantProfile' => '#'
		),
		Array(
			'id' => 13,
			'time' => Array('5-00', '6-30'),
			'title' => 'Консультация по скайпу',
			'method' => 'skype',
			'participiant' => 'Петрова Анна',
			'participiantProfile' => '#'
		),
	);
	echo json_encode($schedule);
?>