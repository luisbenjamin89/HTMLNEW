<?php
//$numero=25;
//echo " valor de numero $numero <br>";
////numero grande
//$numero= 24_154_254.25;
//echo "valor de numero grande $numero<br>";
////numnero en octal
//$numero= 0o100110;
//echo "valor de numero $numero<br>";
////numero en binario
//$numero= 0b110;
//echo "valor de numero en binario $numero<br>";
//numero en hexadecimal
//$numero = $_GET['numero'];//leyendo un numero  de la url
function numero_binirio ($numero)
{
//    $numero=rand(1,255);
    $nummero_binario=decbin($numero) ;
    $nummero_hexadecimal=dechex($numero) ;
    $nummero_octal=decoct($numero) ;
    echo "valor de  numero $numero en octal $nummero_octal <br>";
    echo "valor de  numero $numero en hexadecimal $nummero_hexadecimal <br>";
    echo "valor de  numero $numero en decimal $nummero_binario<br>";

}echo numero_binirio(rand(1,255));

//echo numero_binirio($numero);//esto para pasar el valor unicos a la funcion
//rand(1,255)
//$numero= rand(1,255);
////$numero= 25;
//$nummero_hexadecimal=dechex($numero) ;
//echo "valor de  numero $numero en hexadecimal $nummero_hexadecimal <br>";
//
////numero en dinario
////$numero= 25;
//$nummero_binario=decbin($numero) ;
//echo "valor de  numero $numero en decimal $nummero_binario <br>";
//
////numero en octal
////$numero= 25;
//$nummero_octal=decoct($numero) ;
//echo "valor de  numero $numero en octal $nummero_octal <br>";


////crear variables con los diferentes tipos de valores que hoy
//
//////valor enteros
//$numero =25;
//$numero_binario =0b11010;
//$numero_hexadecimal=0xAB234;
////valor reales
//$numero_real1=25.125;
//$numero_real1=25E-13;
////valores booleans
//$boole1=true;
//$boole2=false;
////valores string
//$string ="hola";
////valores null
//$null=null;
////valores arrys
//$notas= [8,5,6,7];



