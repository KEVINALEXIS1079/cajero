<?php



function menu (){

 echo "hola\n";

 while (true) {
    echo "1. Consultar saldo\n";
    echo "2. Retirar dinero\n";
    echo "3. Salir\n";
    $opciones = readline("ingrese la opcion \n");
    switch ($opciones) {
       case 1:
           
           break;
       case 2:
           $montoRetiro = readline("Ingresa el monto a retirar: ");
           retirarDinero($saldoInicial, $montoRetiro);
           exit;

        case 3:
            echo "Gracias por usar el cajero automático. ¡Hasta luego!\n";
            exit;
       default:
       
           echo "opcion invalida";
           break;
    }
 }
 

};


while (true) {
    
    $a = readline("presione 1 para continuar");
 
    switch ($a) {
     case '1':
         echo ingreso();
         break;
     
     default:
         echo "opion incorrecta";
         exit;
    }
     
}


function ingreso(){

    while (true) {
      $ingre =  readline("introduzca la targeta\n");
      
       if ($ingre == 1) {
           $contra = readline("ingresa la clave");
           if ($contra == 1111) {
                echo "targata 1\n";
                echo menu();
           }
       }elseif ($ingre == 2) {
           $contra = readline("ingresa la clave");
           if ($contra == 2222) {
                echo menu();
           }
       }elseif ($ingre == 3) {
           $contra = readline("ingresa la clave");
           if ($contra == 3333) {
                echo menu();
           }
       }else {
           echo "no se encontro ninguna targeta registrada\n";
       }break;
    }
};

$saldoInicial = 100000;

function consultarSaldo($saldo){
    echo "Tu saldo actual es: $$saldo\n";
}


function retirarDinero(&$saldo, $monto){
    if ($monto > 0 && $monto <= $saldo) {
        $saldo -= $monto;
        echo "Retiraste $$monto. Saldo restante: $$saldo\n";
    } else {
        echo "Monto inválido o saldo insuficiente.\n";
    }
}

echo "Bienvenido al cajero automático.\n";


function targeta(){
    
}
   


// estoy peleando con la funcio de retitar mamañema