<?php 
    //Смотрим, первичная загрузка файла или запрос уже на обрезание
    $action = $_POST['action'];
    $result = new stdClass();
    switch($action){
        case 'get_preview': //Если нужна просто превьюшка
            //Тут получаем файл от клиента
            $file = $_FILES[0];
            //Дальше должны чем-нибудь кропнуть превьюшку 400х400 (например) и сложить куда-то, я подготовил изображение заранее
            //...

            //Отправляем в объекте ссылку на превьюшку
            $result->thumb = 'server_side/tmp/thumb400.jpg';
        break;
        case 'cropping': //Если пора уже кропать, то ждем координат
            $x1 = $_POST['x1']; //Верхний левый угол
            $y1 = $_POST['y1']; //
            $x2 = $_POST['x2']; //Правый нижний угол
            $y2 = $_POST['y2']; //
            $w = $_POST['w'];   //Ширина
            $h = $_POST['h'];   //Высота
        
            //Дальше кропаем чем-нибудь и куда-нибудь складываем
            //...
        
            $i_am_a_superman = true;
            if($i_am_a_superman){   //Если всё норм, то отправляем true и ссылку на аватарку
                $result->cropped_status = true;
                $result->cropped_image = 'server_side/avatars/01.jpg'; //Для демо подготовил сам
            } else{ //Если нет, то отправляем false и описываем ошибки, если хотим
                $result->cropped_status = false;
                $result->messages = Array();
                $result->messages[] = 'Что-то пошло не так';
            }
        break;
    }
    echo json_encode($result);
?>