<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet" >
    <title>ordenar numneros</title>
</head>
<body>
<h1>Ordenando numeros</h1>
<?php
$numero1=rand(1,100);
$numero2=rand(1,100);
$numero3=rand(1,100);

$max = max($numero1,$numero2,$numero3);
$min= min($numero1,$numero2,$numero3);
$medio= ($numero1+$numero2+$numero3)-($max+$min);

echo " $max <br>" ;
echo "$medio <br>";
echo "$min <br>";

?>
</body>
</html>

<!--la misma solucion pero con arrays -->
<?php
//$numero=rand(1,100);
//$numero2=rand(1,100);
//$numero3=rand(1,100);
//
//$arreglonumero = array($numero,$numero2,$numero3);
//sort($arreglonumero );
//
//foreach ($arreglonumero as $ordenado)
//{
//    echo $ordenado;
//    echo '<br>';
//}
//?>