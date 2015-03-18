<?php
	switch($_POST['action']){
		case 'createEvent':
			$event = json_decode($_POST['evnt']);
			$event->id = rand(100,1000);
			echo json_encode($event);
		break;
		case 'updateEventTime':
			print_r(json_decode($_POST['evnt']));
		break;
		case 'removeEvent':
			print_r(json_decode($_POST['evnt']));
		break;
	}
?>