<?php
// Iniciar los contadores 
$pares = 0;
$impares = 0;

// Bucle para recorrer los n�meros del 1 al 100
for ($i = 1; $i <= 100; $i++) {
    // Comprobar si el n�mero es par
    if ($i % 2 == 0) {
        $pares++;
    } else {
        
        $impares++;
    }
}

// Mostrar resultado
echo "Cantidad de n�meros pares del 1 al 100: $pares<br>";
echo "Cantidad de n�meros impares del 1 al 100: $impares";
?>
