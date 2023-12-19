
<?php
$edad = $_GET['edad'];//leyendo un numero  de la url


if ($edad >= 18) {

    $mjs= "tienes $edad eres mayor de edad";
} else {
    $mjs = "tienes $edad eres menor de edad ";

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>validacion de edad</title>
</head>

<h1>validacion de edad</h1>
<?php
echo $mjs;
?>
<body>

</body>
</html>



f
