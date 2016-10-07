
<?php


function afficherPlaylist()
{
    if (empty($_GET["ville"]) ) {

        return "";
    }
   /* elseif ($_GET["ville"] === null) {
        return "Error : veuillez entrer une ville dans le champ ci-dessous.";
    }*/

    $meteo= file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$_GET["ville"].'&appid=f89a131ce3d17d939fff1e4e7fa2315d');
    $tab = json_decode($meteo, true);


    if ($tab['weather'][0]['main'] == 'Rain') {
        return '<iframe scrolling="no" frameborder="0" allowTransparency="true" src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=700&height=350&color=007FEB&layout=dark&size=medium&type=playlist&id=1911334042&app_id=1"
                width="500"height="240"></iframe>';
    }

    elseif (trim($tab['weather'][0]['main'] == 'Clear')) {
        return '<iframe scrolling="no" frameborder="0" allowTransparency="true" src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=700&height=350&color=007FEB&layout=dark&size=medium&type=playlist&id=1118430371&app_id=1" 
                width="500" height="240"></iframe>';
    }

    elseif (trim($tab['weather'][0]['main'] == 'Clouds')) {
        return '<iframe scrolling="no" frameborder="0" allowTransparency="true" src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=700&height=350&color=007FEB&layout=dark&size=medium&type=playlist&id=79587491&app_id=1"
                width="500" height="240"></iframe>';
    }
    elseif (trim($tab['weather'][0]['main'] == 'Snow')) {
        return '<iframe scrolling="no" frameborder="0" allowTransparency="true" src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=700&height=350&color=007FEB&layout=dark&size=medium&type=playlist&id=1495224591&app_id=1" 
                width="500" height="240"></iframe>';
    }

}

function afficherInfo()
    {

        if (empty($_GET["ville"]))

        {
        return "";
        }
        elseif ($_GET["ville"] === null)
        {
            return "";
        }

        $meteo= file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$_GET["ville"].'&appid=f89a131ce3d17d939fff1e4e7fa2315d');
        $tab = json_decode($meteo, true);

        return'In the city of ' .$tab['name']. '<br/>'.
         'The weather is : ' .$tab['weather'][0]['main'] . '<br/>'.
         'The temperature is : ' .(($tab['main']['temp']-273.15)) . '°C<br/>'.
         'The humidity is : ' .$tab['main']['humidity'].' %' . '<br/>'.
         'The minimal temperature is : ' .(($tab['main']['temp_min']-273.15)) . '°C<br/>'.
         'The maximal temperature is : ' .(($tab['main']['temp_max']-273.15)).'°C';
    }

echo '<div id="playlist" class=" col-lg-offset-1 col-lg-5">'. afficherPlaylist().'</div>';
echo '<div id="info" class=" col-lg-6">'. afficherInfo().'</div>';

?>






