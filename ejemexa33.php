<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $horas = $_POST['horas'];
    if (($horas) && $horas >= 0) {
        $minutos = $horas * 60;
         // 1 hora = 60 minutos
        $segundos = $horas * 3600; 
        // 1 hora = 3600 segundos
        echo "$horas horas equivalen a $minutos minutos o $segundos segundos.";
    }
} else {
    echo '<form method="POST">
            Ingresa cuantas horas quieres calcular: <input type="number" step="any" name="horas">
            <button type="submit">Convertir</button>
          </form>';
}
?>
