<?php
$numeros = [5, 3, 8, 2, 10];
$suma = 0;

for ($i = 0; $i < count($numeros); $i++) {
    $suma += $numeros[$i];
}

echo "La suma es: " . $suma;
?>