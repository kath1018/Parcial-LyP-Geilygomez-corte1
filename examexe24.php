<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = $_POST['numero'];
    if (($numero) && $numero >= 0) {
        $factorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $factorial *= $i;
        }
        echo "El factorial de {$numero} es {$factorial}.";
    } else {
        echo "Por favor, ingresa un número válido (0 o mayor).";
    }
} else {
    echo '<form method="POST">
            Ingresa un número: <input type="number" name="numero">
            <button type="submit">Calcular factorial</button>
          </form>';
}
?>
