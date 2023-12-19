<?php
// funcion  time

//for($contdor=0;$contador<30;$contador ++)
//{
//$segundos=time()+$contdor*60*60*24;
//    $fecha = date("d/m/y" ,$segundos);
//echo "$fecha <br>" ;
//}
$fechas_siguientes="";
for ($n=0; $n<30; $n++){
    $segs=time()+$n*60*60*24;
    $fechas_siguientes.=date("d/m/Y",$segs)."<br>";
    echo $fechas_siguientes ;
}

?>
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!---->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<h1>--><?php //=$mjs?><!--</h1>-->
<!--<h3>--><?php //=$fecha?><!--</h3>-->
<!--</body>-->
<!--</html>-->
