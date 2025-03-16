<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $texto = $_POST['texto']; 
    // Captura el texto ingresado por el usuario
// Convierte a mayúsculas
    if (!empty($texto)) {
        $textoEnMayusculas = strtoupper($texto);
        echo "El texto en mayúsculas es: {$textoEnMayusculas}";
    } else {
        echo "Por favor, ingresa un texto válido.";
    }
} else {
    echo '<form method="POST">
            Ingresa texto en minúsculas: <input type="text" name="texto">
            <button type="submit">Convertir</button>
          </form>';
}
?>
