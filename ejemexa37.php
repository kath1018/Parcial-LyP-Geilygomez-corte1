<?php
session_start(); // almacenar los resultados de las votaciones

// candidatos  ya creados
if (!isset($_SESSION['candidatos'])) {
    $_SESSION['candidatos'] = [
        "Candidato 1" => 0,
        "Candidato 2" => 0,
        "Candidato 3" => 0
    ];
}

// formulario de votación
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $voto = $_POST['candidato'];
    if (isset($_SESSION['candidatos'][$voto])) {
        $_SESSION['candidatos'][$voto]++; // incrementar conteo en el cndidato seleccionado
        echo "¡Gracias por tu voto para {$voto}!";
    } else {
        echo "Por favor, selecciona un candidato válido.";
    }
}

// formulario de votación
echo '<form method="POST">
        <h3>Elige un candidato:</h3>';
foreach ($_SESSION['candidatos'] as $candidato => $votos) {
    echo '<label>
            <input type="radio" name="candidato" value="' . $candidato . '"> ' . $candidato . '
          </label><br>';
}
echo '<button type="submit">Votar</button>
      </form>';

// resultados actuales
echo '<h3>Resultados de la votación:</h3>';
foreach ($_SESSION['candidatos'] as $candidato => $votos) {
    echo "{$candidato}: {$votos} voto(s)<br>";
}
// Opción para reiniciar los resultados (opcional)
echo '<form method="POST" action="">
        <button type="submit" name="reiniciar">Reiniciar votación</button>
      </form>';

// Reiniciar votación
if (isset($_POST['reiniciar'])) {
    $_SESSION['candidatos'] = [
        "Candidato 1" => 0,
        "Candidato 2" => 0,
        "Candidato 3" => 0
    ];
    echo "Los resultados de la votación han sido reiniciados.";
}
?>
