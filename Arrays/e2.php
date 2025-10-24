<?php
$numeros = [5, 3, 8, 2, 10];
$maximo = $numeros[0];
$minimo = $numeros[0];

for ($i = 1; $i < count($numeros); $i++) {
    if ($numeros[$i] > $maximo) $maximo = $numeros[$i];
    if ($numeros[$i] < $minimo) $minimo = $numeros[$i];
}

echo "Máximo: " . $maximo . "\n"; 
echo "Mínimo: " . $minimo; 
?>