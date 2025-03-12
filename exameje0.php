<?php
// Definir una variable para almacenar el nombre
$nombre = "";

if ($_POST) {
    // Guardar el nombre del formulario en la variable
    $nombre = $_POST['nombre'];
    echo "¡Hola, $nombre!";
} else {
    // Mostrar el formulario
    echo '<form method="POST">
            ¿Cómo te llamas? <input type="text" name="nombre">
            <input type="submit" valuar="Enviar">
          </form>';
}
?>


