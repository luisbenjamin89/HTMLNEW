<?php
//operadores aritmeticos

$a = rand(1,10);
$b = rand(1,10);

echo "<h2>Operadores aritmeticos</h2>";

echo "$a+$b = ".$a+$b."<br />";
echo "$a*$b = ".$a*$b."<br />";
echo "$a-$b = ".$a-$b."<br />";
echo "$a/$b = ".$a/$b."<br />";
echo "$a*$b = ".$a**$b."<br />";
echo "$a%$b = ".$a%$b."<br />";

echo "<h2>Operadores autoincremento</h2>";

$au=10;
$au++;
++$au;
$au--;
--$au;
echo "\$au=10,\$a++=".$au."<br>";
echo "\$au=10,\++\$a=".++$au."<br>";
echo "\$au=10,\$a\--=".$au--."<br>";
echo "\$au=10,\--\$a".--$au."<br>";
echo "<br>";



for($ingremento=5;$ingremento<25;$ingremento++)
{

echo "el valor de la variable es $ingremento <br>";
}

$multi= 1024;

while ($multi%2==0)
{
    echo "$multi-";
    $multi/=2;

}


?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet" >
    <title>tabla codigos</title>
</head>
<body>
<table>
    <caption>tabla de codigo asscii</caption>


        <?php
        $columna =0; //creando la variable que nos llevara la cuenta de las columnos

        echo "<tr>";
        for ($n=0; $n<6; $n++){
            echo "<th>Código</th><th>Carácter</th>";
        } //contruyendo los encabezados de la tabla
        echo "<tr>";
        for ($decimal = 32; $decimal < 127; $decimal++) {
            if($columna % 6 == 0){
                echo "</tr>";
                echo "<tr>";
            }
            $codigo = chr($decimal);

            echo "<td>$decimal </td> 
                  <td>$codigo </td>" ;
            $columna ++ ;
        }
        echo "</tr>"
        ?>

</table>
</body>
</html>
