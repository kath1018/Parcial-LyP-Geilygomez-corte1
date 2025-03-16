<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $oracion = $_POST['oracion'];
    if (($oracion)) {
        $palabras = str_word_count($oracion, 0); 
        // Cuenta las palabras
        echo "La oración ingresada tiene {$palabras} palabras.";
    }
} else {
    echo '<form method="POST">
            Ingresa una oración: <input type="text" name="oracion">
            <button type="submit">Contar palabras</button>
          </form>';
}
?>
