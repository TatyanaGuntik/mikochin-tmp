<?php

//для приема данных мы вручнуюд создали file.json и там пустой массив []

//достаем массив из файла
$arr = file_get_contents('file.json');

//декодируем полученные данные в php массив

$arr = json_decode($arr, true);

//дозаписываем полученные постом данные в массив

$arr[] = $_POST;

//кодируем в json

$arr = json_encode($arr);

//сохраняем в файл json

file_put_contents('file.json', $arr);
