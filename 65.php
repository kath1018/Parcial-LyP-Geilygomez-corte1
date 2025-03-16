<?php
//Una variable global se define fuera de una función y se accede con global dentro de una función.

$mensaje = "hola maravilloso";
function saludar() {
    global $mensaje;
    echo $mensaje . " mundo";
}
saludar();