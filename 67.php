<?php
$edad = 20;
if ($edad >= 18) {
    if ($edad >= 65) {
        echo "Eres adulto mayor.";
    } else {
        echo "Eres adulto.";
    }
} else {
    echo "Eres menor de edad.";
}
