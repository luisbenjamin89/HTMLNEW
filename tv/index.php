<?php
$url = "https://raw.githubusercontent.com/MAlejandroR/json_tv/main/tv.json";
$contenido = file_get_contents($url);
$canalesTV = json_decode($contenido, 1);
var_dump($canalesTV);
?>