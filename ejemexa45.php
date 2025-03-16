<?php
session_start(); //  almacenar los datos de los estudiantes

// Inicializamos la lista de estudiantes si no existe
if (!isset($_SESSION['estudiantes'])) {
    $_SESSION['estudiantes'] = [];
}

//  formulario de registro de estudiantes
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registrar'])) {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $calificacion = $_POST['calificacion'];

    if (!empty($nombre) && is_numeric($edad) && $edad > 0 && is_numeric($calificacion) && $calificacion >= 0 && $calificacion <= 100) {
        $_SESSION['estudiantes'][] = [
            'nombre' => $nombre,
            'edad' => $edad,
            'calificacion' => $calificacion
        ];
        echo "Estudiante '{$nombre}' registrado exitosamente.";
    } else {
        echo "Por favor, ingresa datos válidos.";
    }
}

// resumen de estudiantes registrados
function mostrarResumen($estudiantes) {
    if (empty($estudiantes)) {
        echo "No hay estudiantes registrados aún.";
        return;
    }
    echo "Resumen de estudiantes";
    echo "<table border='1' cellspacing='0' cellpadding='5'>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Calificación</th>
            </tr>";
    foreach ($estudiantes as $estudiante) {
        echo "<tr>
                <td>{$estudiante['nombre']}</td>
                <td>{$estudiante['edad']}</td>
                <td>{$estudiante['calificacion']}</td>
              </tr>";
    }
    echo "</table>";

    // Calcular promedio 
    $sumaCalificaciones = array_sum(array_column($estudiantes, 'calificacion'));
    $promedio = $sumaCalificaciones / count($estudiantes);
    echo "Calificación promedio: " . number_format($promedio, 2) . "</p>";
}

// Opción para reiniciar la lista de estudiantes
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reiniciar'])) {
    $_SESSION['estudiantes'] = [];
    echo "La lista de estudiantes ha sido reiniciada.";
}

// Formulario de registro
echo '<form method="POST">
        <h3>Registrar Estudiante:</h3>
        <label>Nombre: <input type="text" name="nombre"></label><br><br>
        <label>Edad: <input type="number" name="edad" min="1"></label><br><br>
        <label>Calificación: <input type="number" name="calificacion" min="0" max="100"></label><br><br>
        <button type="submit" name="registrar">Registrar</button>
      </form>';

//reiniciar la lista
echo '<form method="POST" style="margin-top: 10px;">
        <button type="submit" name="reiniciar">Reiniciar Lista</button>
      </form>';

// Mostrar resumen de estudiantes
mostrarResumen($_SESSION['estudiantes']);
?>