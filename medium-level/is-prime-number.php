<?php

/**
 * Escribe un programa que se encargue de comprobar si un número es o no primo.
 * Hecho esto, imprime los números primos entre 1 y 100.
 */

function isPrime(int $number): bool
{
    if (2 > $number) {
        return false;
    }

    for ($i=2; $i<$number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}


for ($i=1; $i<101; $i++) {
    if (true === isPrime($i)) {
        var_dump($i);
    }
}