<?php


$meteo= file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$_GET["ville"].'&appid=f89a131ce3d17d939fff1e4e7fa2315d');
$tab = json_decode($meteo, true);
var_dump($tab);
?>