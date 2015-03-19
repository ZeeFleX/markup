<?php
	$day = $_POST['date'];
	$schedule = Array(
		Array(
			'id' => 12,
			'time' => Array('12:00', '14:30'),
			'title' => 'Консультация с Ивановым',
			'type' => 'private',
			'participiant' => 'Иванов Владимир',
			'participiantProfile' => '#'
		),
		Array(
			'id' => 13,
			'time' => Array('5:00', '6:30'),
			'title' => 'Консультация по скайпу',
			'type' => 'skype',
			'participiant' => 'Петрова Анна',
			'participiantProfile' => '#'
		),
		Array(
			'id' => 14,
			'time' => Array('17:00', '18:30'),
			'title' => 'Консультация личная',
			'type' => 'cards',
			'participiant' => 'Чичваркин Евгений',
			'participiantProfile' => '#'
		),
		Array(
			'id' => 15,
			'time' => Array('00:00', '4:00'),
			'type' => 'unwork'
		),
	);
	echo json_encode($schedule);
?>