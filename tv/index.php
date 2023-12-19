<?php
$url = "https://raw.githubusercontent.com/MAlejandroR/json_tv/main/tv.json";
//obtengo el contenido del fichero que contiene el json
$contenido = file_get_contents($url);
//convierto el json a array asociativo
$canalesTV = json_decode($contenido, 1);


$lista= "<ol>";
    foreach ($canalesTV as $canales )
    {
      $lista.= "<li>{$canales['name'] }";

        foreach($canales['channels'] as $subcanales)
        {
            $lista.= "<ul>";
            $lista.=  "<li>{$subcanales['name'] } <a  href={$subcanales['web'] }> <img style='width:2rem' src= {$subcanales['logo']  } > </a></li>";
            $lista.=  " </ul>";
        }
    }
$lista.="</li></ol>";

echo $lista ;
?>

