<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Edades segun años</title>
</head>
 <h1>validaciones de edades</h1>

<section>
    <div>
<table>
        <tr>
            <th>Año nacimento</th>
            <th>año actual</th>
            <th>años vividos</th>
            <th>segundos vividos</th>
        </tr>
        <?php
        $fecha_actual= date("d/m/y",time());
        for($n=1980;$n<=2023;$n++) {
            $año_actual=date("Y");
            $edad=$año_actual-$n;
            $segundo_vividos= time() - $n;
echo "<tr>          
  <td>$n</td>
  <td>$fecha_actual</td>
  <td>$edad</td>
  <td>$segundo_vividos</td>
  </tr>" ;

  }

        ?>
</table>
    </div>
<footer>
    <p>Este fue un ejersicio de estudio donde intente repasar todo lo visto en clase pero se que me faltaron cosas por ver </p>
</footer>
</section>

<body>

</body>
</html>


<?php

$this_ayer=date("Y");
$this_month=date("m");
$this_day=date("d");

$fecha_nacimiento= strtotime("01/06/1989");

$años_vividos= $this_ayer - date("Y",$fecha_nacimiento);
$segundo_vividos= time() - $fecha_nacimiento;
echo " años vividos $años_vividos segundos vividos $segundo_vividos <br>";


$name_day = strftime("%A",strtotime("01/06/1989"));
setlocale(LC_ALL,"es_ES.UTF-8");
 echo $name_day;

