<?php


//$meteo= file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$_GET["ville"].'&appid=f89a131ce3d17d939fff1e4e7fa2315d');
//$tab = json_decode($meteo, true);


//var_dump($tab);

function afficherPlaylist()
{
    if (empty($_GET["ville"]) ) {

        return "WEATHERMOOD vous affiche une playlist en fonction de la météo.";
    }
    elseif ($_GET["ville"] === null) {
        return "Error : veuillez entrer une ville dans le champ ci-dessous.";
    }

    $meteo= file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$_GET["ville"].'&appid=f89a131ce3d17d939fff1e4e7fa2315d');
    $tab = json_decode($meteo, true);


    if ($tab['weather'][0]['main'] == 'Rain') {
        return '<iframe scrolling="no" frameborder="0" allowTransparency="true" src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=700&height=350&color=007FEB&layout=dark&size=medium&type=playlist&id=1911334042&app_id=1"
                width="500"height="240"></iframe>';
    }

    elseif (trim($tab['weather'][0]['main'] == 'Clear')) {
        return '<iframe scrolling="no" frameborder="0" allowTransparency="true" src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=700&height=350&color=007FEB&layout=dark&size=medium&type=playlist&id=1118430371&app_id=1" 
                width="700" height="240"></iframe>';
    }

    elseif (trim($tab['weather'][0]['main'] == 'Clouds')) {
        return '<iframe scrolling="no" frameborder="0" allowTransparency="true" src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=700&height=350&color=007FEB&layout=dark&size=medium&type=playlist&id=79587491&app_id=1"
                width="700" height="240"></iframe>';
    }
    elseif (trim($tab['weather'][0]['main'] == 'Snow')) {
        return '<iframe scrolling="no" frameborder="0" allowTransparency="true" src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=700&height=350&color=007FEB&layout=dark&size=medium&type=playlist&id=1495224591&app_id=1" 
                width="700" height="240"></iframe>';
    }


}
echo afficherPlaylist();
?>