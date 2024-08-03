<?php
echo "¡Bienvenido al juego de póker!\n";

$cartas = array("2" => 2, "3" => 3, "4" => 4, "5" => 5, "6" => 6,
 "7" => 7, "8" => 8, "9" => 9, "10" => 10, "A" => 11, "J" => 10, "Q" => 10, "K" => 10);

$palos = array("_corazon", "_trebol", "_picas", "_diamante");

function cartas_completas()
{
    global $cartas, $palos;
    $cartasCompletas = array();
    foreach ($cartas as $carta => $valor) {
        foreach ($palos as $palo) {
            $cartasCompletas[] = $carta . $palo;
        }
    }

    return $cartasCompletas;
}

function barajar()
{
    $mazo = cartas_completas();
    shuffle($mazo);
    $mano = array_slice($mazo, 0, 5);
    return $mano;
}

function evaluar_fuerza_mano($mano)
{
    global $cartas;
    $fuerza = 0;
    foreach ($mano as $carta) {
        $valor = substr($carta, 0, -1); // Obtiene el valor de la carta sin el palo
        $fuerza += $cartas[$valor];
    }
    return $fuerza;
}


echo "¡Bienvenido al juego de póker!\n";

$cartas = array("2" => 2, "3" => 3, "4" => 4, "5" => 5, "6" => 6,
 "7" => 7, "8" => 8, "9" => 9, "10" => 10, "A" => 11, "J" => 10, "Q" => 10, "K" => 10);

$palos = array("_corazon", "_trebol", "_picas", "_diamante");

function cartas_completas()
{
    global $cartas, $palos;
    $cartasCompletas = array();
    foreach ($cartas as $carta => $valor) {
        foreach ($palos as $palo) {
            $cartasCompletas[] = $carta . $palo;
        }
    }

    return $cartasCompletas;
}

function barajar()
{
    $mazo = cartas_completas();
    shuffle($mazo);
    $mano = array_slice($mazo, 0, 5);
    return $mano;
}

function evaluar_fuerza_mano($mano)
{
    global $cartas;
    $fuerza = 0;
    foreach ($mano as $carta) {
        $valor = substr($carta, 0, -1); // Obtiene el valor de la carta sin el palo
        $fuerza += $cartas[$valor];
    }
    return $fuerza;
}

function logica()
{
    global $mazo, $mazo1;

    $mazo1 = barajar();
    $mazo = barajar();

    $fuerza_mazo1 = evaluar_fuerza_mano($mazo1);
    $fuerza_mazo2 = evaluar_fuerza_mano($mazo);

    if ($fuerza_mazo1 == $fuerza_mazo2) {
        echo "Empate";
    } elseif ($fuerza_mazo1 > $fuerza_mazo2) {
        echo "Mazo 1 gana";
    } else {
        echo "Mazo 2 gana";
    }
}

logica();


function logica()
{
    global $mazo, $mazo1;

    $mazo1 = barajar();
    $mazo = barajar();

    $fuerza_mazo1 = evaluar_fuerza_mano($mazo1);
    $fuerza_mazo2 = evaluar_fuerza_mano($mazo);

    if ($fuerza_mazo1 == $fuerza_mazo2) {
        echo "Empate";
    } elseif ($fuerza_mazo1 > $fuerza_mazo2) {
        echo "Mazo 1 gana";
    } else {
        echo "Mazo 2 gana";
    }
}

logica();
?>
