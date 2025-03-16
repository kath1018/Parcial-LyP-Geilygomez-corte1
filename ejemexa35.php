<?php
// Lista de nombres
$nombres = ["Sara", "Venus", "Daniela", "Laura", "Pedro", "Luisa", "Esteban", "Cris"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $busqueda = $_POST['nombre'];
    if (($busqueda)) {
        // Verifica si el nombre está en la lista (sin importar mayúsculas/minúsculas)
        $encontrado = in_array(ucfirst(strtolower($busqueda)), $nombres);
        if ($encontrado) {
            echo "El nombre '{$busqueda}' se encuentra en la lista.";
        } else {
            echo "El nombre '{$busqueda}' no se encuentra en la lista.";
        }
    } else {
        echo "Por favor, ingresa un nombre válido.";
    }
}

echo '<form method="POST">
        Ingresa un nombre para buscar: <input type="text" name="nombre">
        <button type="submit">Buscar</button>
      </form>';
?>
