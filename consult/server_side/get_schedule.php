<?php
	$day = $_POST['date'];
	$schedule = Array(
		'private' => Array(
			Array('6-00', '8-30'),
			Array('16-00', '18-00')
		),
		'skype' => Array(
			Array('12-00', '15-30')
		)
	);
	echo json_encode($schedule);
?>