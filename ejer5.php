<?php 
function FierroAvl(){

   for ($i=0; $i <= 100 ; $i++) { 
        if (($i % 3 == 0) && ($i % 5 == 0)) {
            echo "PesoPluma";
        }elseif ($i % 3 == 0) {
            echo "peso";
        }elseif ($i % 5 == 0) {
            echo "Pluma";
        }
    }
}
echo FierroAvl();