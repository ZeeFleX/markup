<?php
	switch($_POST['action']){
		case 'createEvent':
			$event = json_decode($_POST['evnt']);
			$event->id = rand(100,1000);
			echo json_encode($event);
		break;
		case 'updateEvent':
			$event = json_decode($_POST['evnt']);
			$event->id = rand(100,1000);
			echo json_encode($event);
		break;
		case 'updateEventTime':
			$event = json_decode($_POST['evnt']);
			$event->id = rand(100,1000);
			echo json_encode($event);
		break;
		case 'setWeekend':
			$event = json_decode($_POST['evnt']);
			$event->id = rand(100,1000);
			echo json_encode($event);
		break;
		case 'removeWeekend':
			$event = json_decode($_POST['evnt']);
			$event->id = rand(100,1000);
			echo json_encode($event);
		break;
		case 'removeEvent':
			$event = json_decode($_POST['evnt']);
			$event->id = rand(100,1000);
			echo json_encode($event);
		break;
	}
?>