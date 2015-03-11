<?php
	$day = $_POST['date'];
	$schedule = Array(
		'private' => Array(
			Array('7-00', '8-30'),
			Array('10-00', '10-30')
		),
		'skype' => Array(
			Array('12-00', '14-30'),
			Array('16-30', '17-00')
		)
	);
	echo json_encode($schedule);
?>