<?php
$imagenes=[
    "https://es.wikieducator.org/images/3/3d/Ajax_cliente_servidor.png",

    "https://es.wikieducator.org/images/7/7b/Funcionamiento_ajax.png",
    "https://es.wikieducator.org/images/a/aa/Angular_app_base.png",
    "https://es.wikieducator.org/images/3/3d/Docker_distancia_1.png",

    "https://es.wikieducator.org/images/4/4e/Opcion_Instalar.png",
    "https://es.wikieducator.org/images/a/ab/AplicacionWeb.png",
    "https://es.wikieducator.org/images/e/e4/Red3.png",
    "https://es.wikieducator.org/images/f/f2/DACTW.png",
    "https://es.wikieducator.org/images/e/e5/M3_web.png",
    "https://es.wikieducator.org/images/a/a6/Ficheros.jpeg"];

$size= count($imagenes);
$pos= rand(0,$size-1);
$pos1= rand(0,$size-1);
$pos2= rand(0,$size-1);


$array_pos = array_rand($imagenes, 3);
$html_img="";
foreach ($array_pos as $pos) {
    $html_img.= "<img src='$imagenes[$pos]' alt='imagen' width='80%'  >";
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <META HTTP-EQUIV=Refresh CONTENT="5">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>


    </div>
</head>
<body>

<h1>Imagenes que van a cambiar</h1>


<div class="container">
    <div class="row">

        <div class="col-4 text-center ">
            <h3>imagen 1</h3>
           <?= $html_img?>



        </div>
    </div>

</body>
</html>