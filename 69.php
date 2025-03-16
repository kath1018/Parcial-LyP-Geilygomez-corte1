<?php
function factorial($n) {
    $resultado = 1;
    for ($i = 1; $i <= $n; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}
echo "El factorial de 2 es: " . factorial(2);
