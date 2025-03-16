<?php
function sumarNumerosPares($listaNumeros) {
    $suma = 0;
    foreach ($listaNumeros as $numero) {
        if ($numero % 2 === 0) { // Verificar si el número es par
            $suma += $numero; // Sumar el número par
        }
    }
    return $suma; // Devolver la suma de los pares
}

// numeros a usar
$numeros = [6, 7, 8, 4, 5, 10]; // Lista de números
$resultado = sumarNumerosPares($numeros);

echo "La suma de los números pares es: {$resultado}";
?>
