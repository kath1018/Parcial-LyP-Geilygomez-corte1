<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cadena = $_POST['cadena'];
    if (($cadena)) {
        $cadenaInvertida = strrev($cadena); // Invertir la cadena
        echo "El texto invertido es: {$cadenaInvertida}";
    } else {
        echo "Por favor, ingresa una cadena de texto válida.";
    }
} else {
    echo '<form method="POST">
            Ingresa un texto: <input type="text" name="cadena">
            <button type="submit">Invertir</button>
          </form>';
}
?>
