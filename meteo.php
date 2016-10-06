<?php
        $meteo= file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=London,uk&appid=f89a131ce3d17d939fff1e4e7fa2315d');
        $tab = json_decode($meteo);
        //str_replace('London,uk', POST)
        var_dump($meteo)
    ?>