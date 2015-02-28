<?php 
    //Смотрим, первичная загрузка файла или запрос уже на обрезание
    $result = new stdClass();

    $file = $_FILES[0];
    $result->thumb = 'images/scan/scan01.jpg';
    $result->full = 'images/scan/scan01.jpg';
   
    echo json_encode($result);
?>