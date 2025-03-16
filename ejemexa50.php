<?php
session_start(); // Usamos sesiones para almacenar los datos de los estudiantes

// Inicializar lista de estudiantes si no existe
if (($_SESSION['calificaciones'])) {
    $_SESSION['calificaciones'] = [];
}

// Manejar formulario de registro de calificaciones
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset ($_POST['registrar'])) {
    $nombre = $_POST['nombre'];
    $calificacion = $_POST['calificacion'];
    if (!empty($nombre) && is_numeric($calificacion) && $calificacion >= 0 && $calificacion <= 100) {
        // Registrar estudiante y su calificación
        $_SESSION['calificaciones'][] = [
            'nombre' => $nombre,
            'calificacion' => $calificacion
        ];
        echo "Se registró a $nombre con una calificación de {$calificacion}.";
    } else {
        echo "Por favor, ingresa un nombre válido y una calificación entre 0 y 50.<br>";
    }
}
// Mostrar resumen de calificaciones
function mostrarResumen($calificaciones) {
    if (empty($calificaciones)) {
        echo "No hay calificaciones registradas aún.";
        return;
    }
    echo "<h3>Resumen de calificaciones:</h3>";
    echo "<table border='1' cellspacing='0' cellpadding='5'>
            <tr>
                <th>Nombre</th>
                <th>Calificación</th>
            </tr>";
    foreach ($calificaciones as $estudiante) {
        echo "<tr>
                <td>{$estudiante['nombre']}</td>
                <td>{$estudiante['calificacion']}</td>
              </tr>";
    }
    echo "</table>";

    // Calcular el promedio general
    $sumaCalificaciones = array_sum(array_column($calificaciones, 'calificacion'));
    $promedio = $sumaCalificaciones / count($calificaciones);
    echo "<p>Promedio general: " . number_format($promedio, 2) . "</p>";
}

// Reiniciar sistema de calificaciones si es necesario
if ($_SERVER['REQUEST_METHOD'] === "POST"  && isset($_POST['reiniciar'])) {
    $_SESSION['calificaciones'] = [];
    echo "El sistema de calificaciones se ha reiniciado.<br>";
}
// Formulario para registrar calificaciones
echo '<form method="POST">
        Registrar Calificación:
        <label>Nombre del estudiante: <input type="text" name="nombre"></label><br><br>
        <label>Calificación (0-50): <input type="number" name="calificacion" min="0" max="100"></label><br><br>
        <button type="submit" name="registrar">Registrar</button>
      </form>';

// Botón para reiniciar calificaciones
echo '<form method="POST" style="margin-top: 10px;">
        <button type="submit" name="reiniciar">Reiniciar Sistema</button>
      </form>';

// Mostrar el resumen de calificaciones
mostrarResumen($_SESSION['calificaciones']);
?>
