<?php
include ("funciones.php");
// crear un array vacio
$notas =[];
var_dump($notas);

//creo un array con valores

$numeros=[10,11,25,32,15,14];

var_dump($numeros);


// añadir nuevos elemento al array
$numeros[]=100;
var_dump($numeros);

//notas aleatorias

$notas=[];
for($i=0;$i<10;$i++)
{
$numeros=rand(1,100);
$nota[$i]=$numeros;
}
// en este ejercio dividimos el valor y el indice del array
foreach ($nota as $ordenado => $valor)
{
    $posicion=$ordenado+1;
    echo " el valor de la nota $posicion es $valor";
    echo '<br>';
}
$maximo= max($nota);
$minimo= min($nota);
$media= array_sum($nota)/count($nota);
var_dump($nota);
var_dump($maximo);
var_dump($minimo);
var_dump($media);

//crear un array vacio o inicializado de 10
$array =array_fill(0,10,rand(1,10));
var_dump($array);
// se crea una funcion que proporcione los numeros a asignar al arreglo
function inicializar(){
    return rand(0,10);
}

$array=array_map("inicializar",$array);
var_dump($array);

//
?>