<?php
// declarion de funciones  y especificando que tipo de valor devuelve con el : string
function saludar():string{
    $hora= (int)date("H");
    var_dump($hora);
    $saludo= match($hora){
        9,10,11,12,13,14,=>"Buenos dias",
        15,16,17,18,19=>"Buenas tardes",
        default => "Buenas noches"
    };
    return $saludo;
}
//invocamos a la funcion
echo saludar();



// creando funciones con parametros
function racional (int $num, int $den):string|bool{

   $salida= $den!=0 ? "$num/$den":false;

 return $salida;

}

$n1=racional(5,9);
$n2=racional(8,6);

echo "<h1>$n1 + $n2</h1>";

/// creando funciones que evalue situaciones
/* fecha() = 12/12/2023
* fecha (25)= 25/12/2023
 * fecha(25,11)= 25/11/2023
 * fecha(25,11,1900)=25/11/1900
 */
function fecha(int|string $dia=null, int $mes=null, int $year=null):string {


    if (is_null($dia)){
        return date("d")."/".date("m")."/".date("Y");
    }
    if (is_string($dia)){
        return "$dia";
    }
    if (is_null($mes)) {
        return "$dia" ."/". date("m") . "/" . date("Y");
    }
    if (is_null($year)) {
        return "$dia" ."/". "$mes" . "/" . date("Y");
    }
    return "$dia" ."/". "$mes" ."/"."$year";

}
$f=fecha(1);
echo "<h1>$f</h1>";



//funcion para pasar parametros por valor y por referencia

function sumar_pares (int &$num1 , int &$num2):int{
    if($num1%2 !==0)
        $num1++;
    if($num2%2 !==0)
        $num2++;
    return $num1+$num2 ;
}
$a=5;
$b=7;
$total= sumar_pares($a,$b);
echo "<h1>num1 vale $a y num2 vale $b</h1>";
echo "<h1>$a+$b=$total</h1>";

