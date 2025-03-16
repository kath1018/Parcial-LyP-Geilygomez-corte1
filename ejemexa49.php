<?php
function obtenerDiaDeLaSemana($fecha) {
    // Convertir la fecha a formato de tiempo y obtener el día en texto
    $timestamp = strtotime($fecha); // Convierte la fecha en un timestamp
    $diaDeLaSemana = date("l", $timestamp); // Obtiene el día en inglés

    // Traducir el día de la semana al español
    $diasEnEspanol = [
        "Monday"    => "Lunes",
        "Tuesday"   => "Martes",
        "Wednesday" => "Miércoles",
        "Thursday"  => "Jueves",
        "Friday"    => "Viernes",
        "Saturday"  => "Sábado",
        "Sunday"    => "Domingo"
    ];

    return $diasEnEspanol[$diaDeLaSemana] ?? "Fecha no válida";
}

$fecha = "2025-03-17"; // Fecha en formato AAAA-MM-DD
$dia = obtenerDiaDeLaSemana($fecha);

echo "La fecha $fecha es día: {$dia}";
?>
