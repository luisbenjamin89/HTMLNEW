<?php
include ("funciones.php");

$operacion=$_POST['select'] ?? "";
$p_numero=$_POST['Numero1'] ?? "";
$s_numero=$_POST['Numero2'] ?? "";


switch ($operacion){

    case "Sumar" :  $msj=sumar($p_numero,$s_numero);
    break;

    case "Restar" : $msj=restar($p_numero,$s_numero);
    break;

    case "Multiplicar" : $msj=multiplicar($p_numero,$s_numero);
    break;

    case "Dividir" : $msj=Dividir($p_numero,$s_numero);
        break;
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Operaciones</title>
</head>
<body>

<fieldset style="width: 50%;float:left;margin-left: 20%; background: bisque">
    <legend><h1>CALCULADORA</h1></legend>
    <fieldset>
        <legend>oepreciones</legend>
        <form action="formulario.php" method="POST">

            <div class="form-grup">
                <label for="Numero1" class="form-label">Primer numero</label>
                <input type="text" name="Numero1" id="Numero1" class="form-control"
                       placeholder="intrudzca primer numero">
            </div>

            <div class="form-grup">
                <label for="Numero2" class="form-label">segundo Numero</label>
                <input type="text" name="Numero2" id="Numero2" class="form-control"
                       placeholder="intrudzca segundo numero">
            </div>

            <div>
              <label for="select" class="form-label">seleccione operaciones</label>
                <select name="select" class="form-control" id="select">
                    <option>--operaciones--</option>
                    <option value="Sumar">+</option>
                    <option value="Restar">-</option>
                    <option value="Multiplicar">*</option>
                    <option value="Dividir">/</option>
                </select>
            </div>

            <div class="form-grup">
                <button type="submit">Calcular</button>
            </div>
        </form>
    </fieldset>


</fieldset>

<h2>El resultado de la operacion es <?=$msj?></h2>

</body>
</html>
