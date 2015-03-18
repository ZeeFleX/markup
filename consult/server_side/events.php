<?php
	switch($_POST['action']){
		case 'updateEventTime':
			echo 'Время события обновлено';
		break;
		case 'removeEvent':
			echo 'Событие удалено';
		break;
	}
?>