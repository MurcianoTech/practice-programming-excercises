<?php

/**
 * Crea un programa que realize el cifrado César de un texto y lo imprima.
 * También debe ser capaz de descifrarlo cuando así se lo indiquemos.
 * 
 * El cifrado cesar consiste en lo siguiente.
 * 
 * A -> D
 * B -> E
 * C -> F
 * 
 * Y de esta forma, sucesivamente. Aunque tenemos que tener en cuenta que está conversión
 * se basa en un cambio de posición por lo que ahora mismo será de 3.
 */

const KEY = 3;

function generateAbecedario(): array
{
    $j = 0;
    $abecedario = [];

    for($i = 65;$i <= 90; $i++) {  
        $letter = chr($i);  
        
        $abecedario[$j] = $letter;
        $j++;
    }

    return $abecedario;
}

function codificateMessage(string $originalMessage): string
{
    $abecedario = generateAbecedario();
    $mesageArray = str_split($originalMessage);
    $codificatedMessage = '';

    for ($i = 0; $i < count($mesageArray); $i++) {
        $originalLetterPosition = array_search($mesageArray[$i], $abecedario);
        
        if (is_bool($originalLetterPosition)) {
            $codificatedMessage .= $mesageArray[$i];
            continue;
        }

        $codificatedLetterPosition = ($originalLetterPosition + KEY);

        $codificatedMessage .= $abecedario[$codificatedLetterPosition];
    }

    return $codificatedMessage;
}

function decodificateMessage(string $originalMessage): string
{
    $abecedario = generateAbecedario();
    $mesageArray = str_split($originalMessage);
    $decodificatedMessage = '';

    for ($i = 0; $i < count($mesageArray); $i++) {
        $originalLetterPosition = array_search($mesageArray[$i], $abecedario);
        
        if (is_bool($originalLetterPosition)) {
            $decodificatedMessage .= $mesageArray[$i];
            continue;
        }

        $codificatedLetterPosition = ($originalLetterPosition - KEY);

        $decodificatedMessage .= $abecedario[$codificatedLetterPosition];
    }

    return $decodificatedMessage;
}

$option = (int) readline('Operación a realizar: 1 - Codificar Mensaje, 2 - Decodificar Mensaje -> ');
$message = readline('Qué mensaje quiere introducir? -> ');

$message = match($option) {
    1 => codificateMessage($message),
    2 => decodificateMessage($message),
    default => 'Introduzca opción correcta'
};

var_dump($message);
