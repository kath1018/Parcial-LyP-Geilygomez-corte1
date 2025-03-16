<?php
//for: Se usa cuando conoces el número exacto de iteraciones.
//while: Se usa cuando no sabes cuántas iteraciones habrá, pero depende de una condición.

// Ejemplo con for
for ($i = 1; $i <= 5; $i++) {
    echo $i;
////
}
// Ejemplo con while
$i = 1;
while ($i <= 5) {
    echo $i;
    $i++;
}