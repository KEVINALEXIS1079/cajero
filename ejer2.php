<?php

function GenereFibonacci($numero){

    $fibonacci  = [0,1];
 
  for($i=2;$i<=$numero;$i++)
    {
        $fibonacci[] = $fibonacci[$i-1]+$fibonacci[$i-2];
    }
    
    echo $fibonacci[$numero];
    
}
 
GenereFibonacci(10);


 
?>
