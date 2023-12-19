<?php
$edad=rand(1,30);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>if_html</title>
    <link href="css/style.css" rel="stylesheet" >
</head>
<body>
 <?php
 if ($edad>=18): ?>
 <h1>esta pagina </h1>
 <?php
 else :
 ?>
 <h1>esta pagina es para menores</h1>
 <?php
 endif
 ?>
</body>
</html>
