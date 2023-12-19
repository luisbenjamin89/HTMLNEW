<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>evaluacionde numero </title>
    <style>  h1, caption {
            background-color: darkgray;
            text-align: center;
        }

        table th, table td {
            border: 1px solid black;
            text-align: center;
            align-content: center;
        }
        tr:nth-child(even) {
            background-color: #D6EEEE;
        }
    </style>

</head>
<body>
<H1>EVALUANDO NUMEROS</H1>

<table>
    <caption>TABLA DE EVALUCION</caption>
    <tr>
        <th></th>
        <th>NUMERO POR O IMPAR</th>
        <th>NUMERO MULTIPLO DE 5</th>
        <th>EVALUACION DE MES</th>
        <th>EVALUACION DE DIAS DEL MES</th>
        <th>EVALUACION DE EDADES</th>
    </tr>
    <tr>
        <th>Numeros</th>
        <td>
            <?php

            $numero = rand(1, 100);

            if (($numero % 2) == 0) {

                echo "$numero  es par ";
            } else {

                echo "$numero es impar ";
            }

            ?>
        </td>
        <td>
            <?php

            if (($numero % 5) == 0) {

                echo " $numero  es multiplo de 5 ";
            } else {

                echo "$numero no es multiplo ";
            }

            ?>
        </td>
        <td>

            <?php
            $mes = rand(1, 12);
            switch ($mes) {
                case 1:
                    echo " $mes es enero";
                    break;
                case 2:
                    echo " $mes es febrero";
                    break;
                case 3:
                    echo " $mes es marzo";
                    break;
                case 4:
                    echo " $mes es abril";
                    break;
                case 5:
                    echo " $mes es mayo";
                    break;
                case 6:
                    echo " $mes es junio";
                    break;
                case 7:
                    echo " $mes es julio";
                    break;
                case 8:
                    echo " $mes es agosto";
                    break;
                case 9:
                    echo " $mes es septiembre";
                    break;
                case 10:
                    echo " $mes es octubre";
                    break;
                case 11:
                    echo " $mes es nobiembre";
                    break;
                case 12:
                    echo " $mes es Diciembre";
                    break;
            }

            ?>

        </td>
        <td>
            <?php

            $dia = rand(1, 31);
            $mes = rand(1, 12);
            $total_dia = cal_days_in_month(CAL_GREGORIAN, $mes, 2023);
            $error = "";

            if ($dia <= $total_dia) {
                echo "el mes $mes comprende el dia $dia";
            } else {
                $error = "el mes $mes no contiene el dia  $dia";
                echo $error;
            }
            ?>
        </td>

        <td>
            <?php

            $edad = rand(0, 110);

            switch (true) {
                case $edad < 3:
                    echo "Eres un bebe en la edad de $edad";
                    break;
                case $edad > 3 and $edad <= 10:
                    echo "Eres una niña con la edad de $edad";
                    break;
                case $edad > 10 and $edad <= 17:
                    echo "Eres una adolecente con la edad de $edad";
                    break;
                case $edad > 17 and $edad <= 26:
                    echo "Eres una joven con la edad de $edad";
                    break;
                case $edad > 26 and $edad <= 59:
                    echo "Eres una adulto con la edad de $edad";
                    break;
                case $edad > 59 and $edad <= 80:
                    echo "Eres una experimentado con la edad de $edad";
                    break;
                case $edad > 80 and $edad <= 110:
                    echo "disfrutacon la edad de $edad";
                    break;
            }


            ?>
        </td>


    </tr>
</table>

</body>
</html>


