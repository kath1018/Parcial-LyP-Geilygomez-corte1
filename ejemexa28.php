<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $limite = $_POST['limite'];
    if (($limite) && $limite >= 0) {
        $fibonacci = [0, 1];
        while (true) {
            $siguiente = end($fibonacci) + prev($fibonacci); 
            // Suma los dos últimos números
            if ($siguiente > $limite) {
                break; 
                // Detén el bucle si se supera el límite
            }
            $fibonacci[] = $siguiente; 
            // Agregar el número a la serie
        }
        echo "La serie de Fibonacci hasta {$limite} es: " . implode(", ", $fibonacci);
    } else {
        echo "Por favor, ingresa un número válido (0 o mayor).";
    }
} else {
    echo '<form method="POST">
            Ingresa un número: <input type="number" name="limite">
            <button type="submit">Generar serie</button>
          </form>';
}
?>
