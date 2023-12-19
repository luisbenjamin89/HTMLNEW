<?php

function obtener_datos(array $productos):string
{

    $lista= "<ol>";

    foreach ($productos as $producto =>$contenido)
    {
        $lista.= "<li>$producto</li>";

    }

    $lista.="</ol>";

    return $lista;
}


function obtener_precios(array $productos):string
{

    $precios= "<ol>";

    foreach ($productos as $producto =>$contenido)

    {
        $precio=$contenido['precio'];
        $precios.= "<li>$producto a $precio</li>";

    }
 $precios.="</ol>";

    return $precios;
}

function cantidades(array $productos):string
{

    $precios= "<ol>";

    foreach ($productos as $producto =>$contenido)

    {
        $unidades=$contenido['unidades'];
        $precios.= "<li>$producto stock =  $unidades unidades</li>";

    }
    $precios.="</ol>";

    return $precios;
}


function pedir(array $productos):string {

    $lista="<ol>";

    foreach ($productos as $producto =>$contenido)
    {
        $unidad=$contenido['unidades'];
        if ($unidad< 2100)
            $lista.="<li>$producto stock =  $unidad unidades</li>";
    }
    $lista.="</ol>";

    return $lista;
}

function tienda(array $productos):string {
    $form="<form  action='negocio.php' method='POST'> <h3>En este formulario puede comprar nuestros productos </h3> <fieldset>
                <legend >Productos disponibles y precios :</legend><div > <ol>";
    foreach ($productos as $producto =>$contenido)
    {
        $unidad=$contenido['unidades'];
        $precio=$contenido['precio'];
        $form.="<li>$producto stock =  $unidad unidades  a un presio de $precio €</li>";

    }
    $form.="</ol></div>";

    $form.="<div ><h2>lista de compra</h2>";
    foreach ($productos as $producto =>$contenido)
    {


        $form.="<label for=$producto >$producto</label> <input type='text' name=$producto id=$producto placeholder='cantidad a comprar'><br>";

    }
    $form.="</div> <br> <div> <input type='submit' value='comprar' name='submit'></div></form>";


return $form;
}

function factura (array $facturacion , array $productos):string
{

    $form="<form  action='negocio.php' method='POST'> <h3>facturacion de tienda </h3> <fieldset>
                <legend >FACTURA:</legend>";


    foreach ($facturacion as $producto =>$contenido)
    {

       $value =$productos[$producto]['precio'] ;
       $sudtotal= (int)$contenido * $value ;
        $TOTAL += $sudtotal;
        $form .= "<label>$contenido  -  $producto A $value  SUBTUTAL = $sudtotal </label> <br>";

    }

    $form.="<label>TOTAL= $TOTAL </label> <br></fieldset></form>";


    return $form;
}
