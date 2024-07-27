<?php

/*
Crea una función llamada "esPalindromo" que reciba una 
cadena de texto como parámetro y devuelva true si la cadena es un palíndromo y false si no lo es.
Un palíndromo es una palabra o frase que se lee igual de izquierda a derecha y de derecha a izquierda,
ignorando los espacios y signos de puntuación.
*/
     
function esPalindromo($frase)
{   
    $frase = readline("ingrese una que sea frase palindromo: ");
    $quitarMayusculas = explode(" ", strtolower($frase));
    $nuevo="";
    foreach($quitarMayusculas as $quitarEspacios)
    {
        trim($quitarEspacios);
        $nuevo .= $quitarEspacios; 
    }
    
    if($nuevo == strrev($nuevo))
    {
        return "si es Palindromo";
    }
    else {
        return "No es";
    }
}


echo esPalindromo($frase);


