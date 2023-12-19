<?php


$contador = 0;
$suma = 0;
$numero = 0;
while ($contador < 100) {

    if (($numero % 2) == 0) {
        $suma = $suma + $numero;
        $contador = $contador + 1;
    }
    $numero = $numero + 1;
};
echo "la suma de los 100 primeros numeros pares es $suma <br>";
echo "<br>";


$uno=0;
$dos=0;
$tres=0;
$cuatro=0;
$cinco=0;
$seis =0;
$contador=0;
for ($contador=0;$contador<600000;$contador ++)
{
    $dado=rand(1,6);
   switch ($dado)
   {
       case 1 : $uno++;
       break;
       case 2 : $dos++;
       break;
       case 3 : $tres++;
       break;
       case 4 : $cuatro++;
       break;
       case 5 : $cinco++ ;
       break;
       case 6 : $seis++ ;
       break;
   }

}
echo "unos $uno <br>";
echo "dos $dos <br>";
echo "tres $tres <br>";
echo "cuatro $cuatro <br>";
echo "cinco $cinco  <br>";
echo "seis  $seis <br>";