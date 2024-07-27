<?php

function OrdenaArray(&$array){
    
    
  $tamaño = count($array);
        for ($i = 0; $i < $tamaño; $i++) {
            for ($j = 0; $j < $tamaño - 1; $j++) {
                if ($array[$j] < $array[$j + 1]) {
                    $temporal = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temporal;
                }
            }
    }
    
}
$array = [5, 1, 80, 10, 7, 66, 100];

print_r($array);
echo "array antes de organizarlos";
OrdenaArray($array);
echo "despues de organizarlos";
print_r($array);
