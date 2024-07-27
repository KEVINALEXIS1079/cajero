<?php

function sumaDigitos($numero) {
    $suma = 0;
    while ($numero > 0) {
        $digito = $numero % 10;
        $suma += $digito;
        $numero = (int)($numero / 10);
    }
    return $suma;
}

// Ejemplo de uso:
$numeroEjemplo = readline("ingrese varios numeros: ");
$resultado = sumaDigitos($numeroEjemplo);
echo "La suma de los dígitos de $numeroEjemplo es $resultado";
