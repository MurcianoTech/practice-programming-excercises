<?php

/**
 * Dado un arreglo a de números enteros, regresar un arreglo de números enteros de la misma longitud, 
 * cuyos elementos son los cuadrados de los elementos del arreglo dado.
 */

$numeros = [
    10, 
    13,
    20,
    25
];

$salida = [];

foreach ($numeros as $numero) {
    $salida[] = $numero * $numero;
}

var_dump($salida);
$salida = [];

for ($i = 0; $i<count($numeros); $i++) {
    $salida[] = $numero * $numero;
}

var_dump($salida);