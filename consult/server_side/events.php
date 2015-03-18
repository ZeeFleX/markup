<?php
	switch($_POST['action']){
		case 'createEvent':
			print_r(json_decode($_POST['evnt']));
		break;
		case 'updateEventTime':
			print_r(json_decode($_POST['evnt']));
		break;
		case 'removeEvent':
			print_r(json_decode($_POST['evnt']));
		break;
	}
?>