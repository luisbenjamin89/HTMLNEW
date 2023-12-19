<?php
$numero = rand(32, 127);
echo ($numero % 2 == 0) ? "$numero es par <br>" : "el numero es impar <br>";

echo ($numero >= 18) ? "con $numero años  eres mayor de edad <br>" : "con $numero  años eres menor de edad <br>";

$ascii = chr(rand(1, 127));

echo (preg_match("/[a-zA-Z]/", $ascii) == 1) ? "el codigo ascii $ascii  es una letra <br>" : "el codigo ascii $ascii no es letra <br>";




$codigo = rand(32,127);
$caracter = chr ($codigo);
$caracter =" <span style='color:red'>$caracter</span>";
$msj = match(TRUE){
    $codigo >=48 AND $codigo <=57   => "El carácter $caracter es numérico",
    $codigo >=65 AND $codigo <=90   => "El carácter $caracter es letra mayúscula",
    $codigo >=97 AND $codigo <=122  => "El carácter $caracter es letra minúscula",
    default                         => "el carácter $caracter es un carácter especial"
};
echo $msj ,$codigo;