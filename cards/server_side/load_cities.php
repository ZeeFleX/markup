<?php
    if(isset($_POST['country_id'])) $country_id = $_POST['country_id'];

    $cities = [];

    $cities_array = Array('Москва','Тюмень', 'Курган','Вологда','Волгоград','Новокаменск','Екатеринбург','Санкт-Петербург','Тольяти','Сочи','Туапсе');

    //Составляем массив для образца
    for($i = 0; $i <= 10; $i++){
        $cities[$i] = new stdClass();
        $cities[$i]->country_id = rand(0, 4);
        $cities[$i]->id = $i;
        $cities[$i]->text = $cities_array[$i];
    }

    //Эмулируем данные из БД по стране
    $results = Array();
    foreach($cities AS $key => $city){
        if($city->country_id == $country_id) $results[] = $city;
    }
    echo json_encode($results);
?>