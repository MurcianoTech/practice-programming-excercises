<?php

/**
 * Crea un programa que invierta el orden de una cadena de texto
 * sin usar funciones propias del lenguaje que lo hagan de forma automática.
 * - Si le pasamos "Hola mundo" nos retornaría "odnum aloH"
 */

$inputString = readline('Introduzca cadena -> ');

$input = str_split($inputString);

$outputString = '';

for ($i=count($input); $i > 0; $i--) {
    $outputString .= $input[$i-1];
}

var_dump($outputString);
