<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php and html</title>

    <style>
        table{
            width: 100%;
            border-collapse: collapse;
            border : 1px solid black;
        }
        table th, table td{
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
<table>
    <caption>tablas de codigos</caption>
    <tr>
        <th>numeros</th>
        <th>caracter</th>

    </tr>
<tr>

    <?php

function numero1($codigo){
    printf("<td>%d</td> <td>%c</td>",$codigo,$codigo);


}echo numero1(rand(1,127));

?>
</tr>
    <tr>

        <?php

function numero2($codigo){
    printf("<td>%d</td> <td>%c</td>",$codigo,$codigo);


}echo numero2(rand(1,127));

?>
    </tr>
</table>

</body>
</html>



<?php
//$nombre="Benjamin";
//echo "el dolar es \$nombre $nombre <br>";
//echo "la secuencia de escape es \<br>";
//echo "la secuencia de escape es \\n <br>";

//$pre="nombre:";
//$nombre = "$pre karen";
// echo "<h2>$nombre</h2>";
//
// $numero=64;
// printf("<h2>hola %d %c  %f.2 </h2>",$numero,$numero);

//$codigo=rand(33,127);
//$estilo="<sapn style='color:red'>";
//
//printf("$estilo%d</span>-$estilo%c</span>",$codigo,$codigo);




