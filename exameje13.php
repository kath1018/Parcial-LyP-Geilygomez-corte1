<?php
//verificar si la encuesta ha sido enviada
if ($_POST) {
	//obtener edad y nombre del formulario
	$nombre = $_POST["nombre"];
	

	//mostrar mensaje 
	echo"Bienvenid@ $nombre ¿como te encuentras?.";

	 } else {
    // Mostrar el formulario para ingresar nombre y edad
    echo '<form method="POST">
            Ingresa tu nombre: <input type="text" name="nombre" required><br>
            <input type="submit" valor="enviar">
          </form>';
          }