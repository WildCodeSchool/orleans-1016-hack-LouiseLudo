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



//https://api.deezer.com/search?title=%cloud%



/*
playlist sad songs
https://api.deezer.com/playlist/1911334042/tracks

playliste smile
https://api.deezer.com/playlist/1118430371/tracks
*/