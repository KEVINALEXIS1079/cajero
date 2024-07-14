<?php

$efectivoCajero = 1000000;


$tarjetas = [
    1 => ['clave' => 1111, 'saldo' => 100000],
    2 => ['clave' => 2222, 'saldo' => 200000],
    3 => ['clave' => 3333, 'saldo' => 300000],
];

function consultarSaldo($saldo){
    echo "Tu saldo actual es: $$saldo\n";
}

function retirarDinero(&$saldo, &$efectivoCajero, $monto){
    global $efectivoCajero;

    if ($monto > 0 && $monto <= $saldo) {
        $saldo -= $monto;
        $efectivoCajero -= $monto;
        echo "Retiraste $$monto. Saldo restante: $$saldo\n";
    } else {
        echo "Monto inválido o saldo insuficiente.\n";
    }
}

echo "Bienvenido al cajero automático \n";

while (true) {
    $tarjeta = readline("Introduce la tarjeta: ");
    if (isset($tarjetas[$tarjeta])) {
        $clave = readline("Ingresa la clave: ");
        if ($clave == $tarjetas[$tarjeta]['clave']) {
            $saldoActual = $tarjetas[$tarjeta]['saldo'];
            echo "Bienvenido. ";
            consultarSaldo($saldoActual);
            while (true) {
                echo "1. Consultar saldo\n";
                echo "2. Retirar dinero\n";
                echo "3. Salir\n";
                $opcion = readline("Elige una opción (1-3): ");
                switch ($opcion) {
                    case 1:
                        consultarSaldo($saldoActual);
                        break;
                    case 2:
                        echo "Opciones de retiro:\n";
                        echo "1. 10,000\n";
                        echo "2. 50,000\n";
                        echo "3. 100,000\n";
                        echo "4. 150,000\n";
                        echo "5. 200,000\n";
                        echo "6. Cancelar retiro\n";
                        $montoRetiro = readline("Elige una opción 1-6: ");
                        if ($montoRetiro >= 1 && $montoRetiro <= 5) {
                            retirarDinero($saldoActual, $efectivoCajero, $montoRetiro * 10000);
                        } elseif ($montoRetiro == 6) {
                            echo "Operación de retiro cancelada.\n";
                        } else {
                            echo "Opción inválida. Inténtalo nuevamente.\n";
                        }
                        break;
                    case 3:
                        echo "Gracias por usar el cajero automático. ¡Hasta luego!\n";
                        exit;
                    default:
                        echo "Opción inválida. Inténtalo nuevamente.\n";
                }
            }
        } else {
            echo "Clave incorrecta. Inténtalo nuevamente.\n";
        }
    } else {
        echo "Tarjeta no registrada. Inténtalo nuevamente.\n";
    }
}
?>
