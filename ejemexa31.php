<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = $_POST['numero'];
    if (($numero)) {
        echo "Tabla de multiplicar del número {$numero}";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>{$numero} x {$i} = {$resultado}</li>";
        }
        echo "</ul>";
    } else {
        echo "Por favor, ingresa un número válido.";
    }
} else {
    echo '<form method="POST">
            Ingresa un número: <input type="number" name="numero">
            <button type="submit">Generar tabla</button>
          </form>';
}
?>
