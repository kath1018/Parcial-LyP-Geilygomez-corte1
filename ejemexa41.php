<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // Primera palabra ingresada
    $palabra1 = $_POST['palabra1']; 
    // Segunda palabra ingresada 
    $palabra2 = $_POST['palabra2']; 

    if (!empty($palabra1) && !empty($palabra2)) {
        if (strtolower($palabra1) === strtolower($palabra2)) { 
            echo "Las palabras $palabra1 y $palabra2 son iguales.";
        } else {
            echo "Las palabras '{$palabra1}' y '{$palabra2}' no son iguales.";
        }
    } else {
        echo "Por favor, ingresa ambas palabras.";
    }
} else {
    echo '<form method="POST">
            Ingresa la primera palabra: <input type="text" name="palabra1"><br><br>
            Ingresa la segunda palabra: <input type="text" name="palabra2"><br><br>
            <button type="submit">Comparar</button>
          </form>';
}
?>
