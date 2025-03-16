<?php

//Puedes usar variables para almacenar valores y ciclos para procesarlos.

$numeros = [10, 20, 30];
$suma = 0;
foreach ($numeros as $numero) {
    $suma += $numero;
}
echo "La suma es: {$suma}";