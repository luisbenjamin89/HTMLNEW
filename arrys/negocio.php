<?php
include("funciones.php");
$operacion=$_POST['submit'] ?? "";
$cant_lechuga=$_POST["lechuga"]?? "";
$cant_tomates=$_POST["tomates"]?? "";
$cant_cebollas=$_POST["cebollas"]?? "";
$cant_fresas=$_POST["fresas"]?? "";
$cant_manzanas=$_POST["manzanas"]?? "";

$faturacion=[ 'lechuga' => $cant_lechuga ,
              'tomates' => $cant_tomates,
             'cebollas' => $cant_cebollas,
               'fresas' => $cant_fresas,
             'manzanas' => $cant_manzanas,
];

$productos = [
    'lechuga' => ['unidades' => 200,'precio' => 0.90],
    'tomates' => ['unidades' => 2000,'precio' => 2.15],
    'cebollas' => ['unidades' => 3200, 'precio' => 0.49],
    'fresas'   =>    ['unidades' => 4800, 'precio' => 4.50],
    'manzanas' => ['unidades' => 2500, 'precio' => 2.10],
    'pepinos' => ['unidades' => 1000, 'precio' => 1.80],

];

switch ($operacion){

    case "productos" :
        $msj=obtener_datos($productos);

        break;
    case "precios" :
        $msj=obtener_precios($productos);
        break;
    case "Stock" :
        $msj=cantidades($productos);
        break;
    case "Pedir" :
        $msj=pedir($productos);
        break;
    case "Tienda" :
        $formulario=tienda($productos);
        break;
     case "comprar" : $invoice= factura($faturacion,$productos);

        break;
}

//var_dump($cant_lechuga);
//var_dump($cant_tomates);
//var_dump($cant_cebollas);
//var_dump($cant_fresas);
//var_dump($cant_manzanas);



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if (is_null($formulario) ) :?>
<form action="negocio.php" method="POST">
    <h2>Pedir mostrará todos los productos de menos de 2100 unidades</h2>
    <input type="submit" value="productos" name="submit">
    <input type="submit" value="precios" name ="submit">
    <input type="submit" value="Stock" name="submit">
    <input type="submit" value="Pedir" name="submit">
    <input type="submit" value="Tienda" name="submit">
</form>
<h1><?=$msj?></h1>

<?php else:

    echo "<div>$formulario</div>";

endif; ?>
<div><?=$invoice?></div>
</body>
</html>