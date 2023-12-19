<?php
$a=rand(1,20);
$b=rand(1,20);
$c=rand(1,20);
$rd = 4;//le indico cuantos dicemales quiero
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>resucion de ecuaciones</title>
    <link href="css/style.css" rel="stylesheet" >
</head>
<body>
<h1>evaluando la ecuacion de segundo grado</h1>
<?php

function Ecu_2g($a,$b,$c,$rd){
    $menosb = $b * -1;
    $oper1 = pow($b, 2);
    $oper2 = 4 * $a * $c;
    $resta = $oper1 - $oper2;

    if($resta > 0 )
    {
        $raiz = sqrt($resta);
        $abajo = 2 * $a;
        $result1 = round(($menosb + $raiz) / $abajo, $rd);
        $result2 = round(($menosb - $raiz) / $abajo, $rd);
        $array_result2g = array(1 => $result1, 2 => $result2);
        return $array_result2g;
    }
    else{

            echo "la solucion existe en numeros complejos" ;
        }

}

$calcula_ecuacion = Ecu_2g($a,$b,$c,$rd);
// Aplicamos la funcion

echo "<p>Ecuacion: $a X<sup>2</sup> + $b X $c = 0 </p>
    Solucion 1 = $calcula_ecuacion[1] <br />
    Solucion 2 = $calcula_ecuacion[2]";
?>
</body>
</html>


