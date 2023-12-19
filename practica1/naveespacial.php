<?php

$a = rand(1, 10);
$b = rand(1, 10);

$mensaje = match ($a <=> $b) {
    1 => "\$a con $a es mayor que \$b con $b ",
    0 => "\$a con $a son iguales \$b con $b ",
    -1 => "\$a con $a es mayor que \$b con $b ",
};

$nombre1 = 'Dina';
$nombre2 = 'karla';

$ordenar = match ($nombre1 <=> $nombre2) {
    1 => "$nombre2,$nombre1",
    0, -1 => "$nombre1,$nombre2"
};
// operador de resolucon de numero
$nulos = rand(1,2);
$nombre = $nulos==1?"pedro":null;
$msj= $nombre ?? "no hay  nombre ";

//operador de asignacion &

$numerox= 5;
$numeroy= &$numerox;
$numeroy=100;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> <?= $mensaje ?></h1>
<h2><?= $ordenar ?></h2>
<h2><?= $msj ?></h2>
<h3><?= $numerox ?></h3>
</body>
</html>
