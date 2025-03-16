<?php
//Usa un formulario para capturar datos y almacenarlos en un array o base de datos.
//ejemplo de formulario
echo '<form method="POST">
        Registrar Estudiante:
        <label>Nombre: <input type="text" name="nombre"></label><br><br>
        <label>Edad: <input type="number" name="edad" min="1"></label><br><br>
        <label>Calificación: <input type="number" name="calificacion" min="0" max="100"></label><br><br>
        <button type="submit" name="registrar">Registrar</button>
      </form>';