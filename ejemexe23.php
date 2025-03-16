<?php
// verificar si ya se envio formulario 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $año = $_POST['año'];
    if (($año)) {
        if ($año % 4 == 0 && $año % 100 != 0)  {
            echo "{$año} es un año bisiesto.";
        } else {
            echo "{$año} no es un año bisiesto.";
        }
    } else {
        echo "Por favor, ingresa un año válido.";
    }
} else {
    //mostrar formulario
    echo '<form method="POST">
            Ingresa un año: <input type="number" name="año">
            <button type="submit">Verificar</button>
          </form>';
        } 
?>

