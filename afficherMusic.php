<?php

$json_string = file_get_contents('https://api.deezer.com/playlist/1911334042/tracks', true)
$tract = json_decode($json_string);

echo $tract[];
//$jsondata = file_get_contents($json_string);



//GET




/*
playlist sad songs
https://api.deezer.com/playlist/1911334042/tracks

playliste smile
https://api.deezer.com/playlist/1118430371/tracks
*/