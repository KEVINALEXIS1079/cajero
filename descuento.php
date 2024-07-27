<?php
/*
function calcularDescuento(){
    $precio = readline("ingrese en precion: ");
    $porcentaje = readline("ingrese el porsentaje; ");
    $desceunto = $precio * $porcentaje/100;
    $total = $precio - $desceunto;
    return $total;
}
echo "el precio con el descuento es de: ".calcularDescuento();
*/
function calculardecuento(){
    $precioOriginal = 100;
    $porcentajeDescuento = 50;
    $descuento = $precioOriginal*$porcentajeDescuento/100;
    $precioFinal = $precioOriginal - $descuento;
    return $precioFinal;
}
echo calculardecuento();