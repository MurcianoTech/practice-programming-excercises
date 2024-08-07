<?php

/*
 * Escribe un programa que imprima los 50 primeros números de la sucesión
 * de Fibonacci empezando en 0.
 * - La serie Fibonacci se compone por una sucesión de números en
 *   la que el siguiente siempre es la suma de los dos anteriores.
 *   0, 1, 1, 2, 3, 5, 8, 13...
 */

$numero1 = 0;
$numero2 = 1;

echo $numero1 . PHP_EOL;
echo $numero2 . PHP_EOL;

for ($i=0; $i<48; $i++) {
    $result = $numero1 + $numero2;

    echo $result . PHP_EOL;

    $numero1 = $numero2;
    $numero2 = $result;
}
