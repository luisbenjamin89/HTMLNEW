<?php
$precio=rand(15,60);
$horas=rand(1,60);
$netopagar=0;
$precioextra=1.5;
$irpf=0;
$toalpagar=0;
$horas_extra=0;

if ($horas>40){
    $horas_extra= $horas-40;
    $netopagar = $horas_extra*$precioextra;
    if($netopagar>600 and $netopagar<800){
        $irpf= $netopagar *0.05;
        $toalpagar = $netopagar-$irpf ;
        echo "pago total $toalpagar";
    }if($netopagar<800){
        $irpf= $netopagar *0.12;
        $toalpagar= $netopagar-$irpf;

    }
}else {
    $netopagar = $horas *$precioextra;
    if($netopagar>600 and $netopagar<800){
        $irpf= $netopagar *0.05;
        $toalpagar =$netopagar-$irpf;

    }if($netopagar<800){
        $irpf= $netopagar *0.12;
        $toalpagar =$netopagar-$irpf;

    }
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
    <title>calculo de nomina</title>
</head>
<body>

<h1>EMPRESA PHP</h1>
<table>
    <caption >Nomina de Empleado</caption>

    <tr>
        <th  colspan="2">NOMBRE</th>
        <th   colspan="3">CARGO</th>
    </tr>
    <tr>
        <td colspan="2">Benjamin Gutierrez</td>
        <td colspan="3">Programador senior</td>
    </tr>
    <tr>
        <tH colspan="5">DATALLE NOMINA</th>
    </tr>

    <tr>
        <tH >Horas trabajadas</th>
        <th >Horas extras</th>
        <th >Neto a pagar</th>
        <th >IRPF</th>
        <th >Pago total</th>
    </tr>

    <tr>
        <td> <?= $horas ?> </td>
        <td><?= $horas_extra?></td>
        <td><?= $netopagar ?></td>
        <td><?= $irpf ?></td>
        <td><?= $toalpagar ?></td>
    </tr>
</table>
</body>
</html>

