<?php $numero = rand(1,10);?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tablas</title>
</head>

<table>
    <caption>tabla de multiplicar  del  <?=$numero ?> </caption>

    <?php


for($contador=0;$contador<11;$contador++)
{


    $tabla = $numero*$contador;

    echo " <tr> 
  <td>$numero * $contador = $tabla </td>
  </tr>";

}?>

</table>
<body>


</body>
</html>

