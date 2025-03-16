<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $edad = $_POST['edad'];
    if (($edad) && $edad >= 0) {
        if ($edad >= 18) {
            echo "Tienes {$edad} años, eres mayor de edad.";
        } else {
            echo "Tienes {$edad} años, no eres mayor de edad.";
        }
    } else {
        echo "Por favor, ingresa una edad válida (un número igual o mayor a 0).";
    }
} else {
    echo '<form method="POST">
            Ingresa tu edad: <input type="number" name="edad" min="0">
            <button type="submit">Verificar</button>
          </form>';
}
?>
