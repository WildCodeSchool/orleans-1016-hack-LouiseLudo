<h1>WeatherMood</h1>
<h2>Ecoutez de la musique en fonction de la météo.</h2>

<?php
$meteo= file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$_GET["ville"].'&appid=f89a131ce3d17d939fff1e4e7fa2315d');
$tab = json_decode($meteo, true);

//var_dump($tract);

//echo htmlspecialchars($_POST)

$json_string = file_get_contents('https://api.deezer.com/playlist/1911334042/tracks', true);
$tract = json_decode($json_string);

    function afficherPlaylist()
    {
      if ($tab['main'] == 'Rain' );
         return 'coucou';

      //elseif ($tab['main'] == 'Clear' );
        //  echo <>;

       // ($tab['main'] == 'Clouds' );
         // echo <>;

        //($tab['main'] == 'Snow' );
          //echo <>;
    }

?>
