
<?php
//verificar si la encuesta ha sido enviada
if ($_POST) {
	//obtener numero del formulario
	$numero = $_POST["numero"];
    //comprobar sipar o impar
if ($numero <=0){
    echo"$numero Es negativo";
     } else {
         echo"$numero Es positivo";
         }
        } else {
    // Mostrar el formulario para ingresar los números
    echo '<form method="POST">
            Ingresa tu numero: <input type="number" name="numero" required><br>
            <input type="submit" valor="Verificar si  numero es positivo o negativo">
          </form>';
          }