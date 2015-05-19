<?php
	$day = $_POST['date'];
	$typesArr = Array('unwork', 'meeting', 'online');
	$worktime = Array();
	for($i = 0; $i < 48; $i++){
		$worktime[$i] = Array();
		if(($i >= 0 && $i <=12) || ($i >= 41 && $i <= 48)) $worktime[$i][] = 'unwork';
		if($i >= 13 && $i <=25) $worktime[$i][] = 'meeting';
		if($i >= 20 && $i <=40) $worktime[$i][] = 'online';
	}
	echo json_encode($worktime);
?>