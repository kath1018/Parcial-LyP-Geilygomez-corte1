<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numeros = $_POST['numeros'];
    if (($numeros)) {
        $listaNumeros = explode(',', str_replace(' ', '', $numeros)); // Convertir la cadena en un array
        if (array_filter($listaNumeros, 'is_numeric') === $listaNumeros) {
            sort($listaNumeros, SORT_NUMERIC); // Ordenar numéricamente
            echo "La lista ordenada es: " . implode(', ', $listaNumeros);
        } else {
            echo "Por favor, ingresa solo números separados por comas.";
        }
    } else {
        echo "Por favor, ingresa una lista de números.";
    }
} else {
    echo '<form method="POST">
            Ingresa una lista de números (separados por comas): <input type="text" name="numeros">
            <button type="submit">Ordenar</button>
          </form>';
}
?>
