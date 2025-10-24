<?php
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] % 2 == 0) {
        echo $numeros[$i] . "\n"; // Resultado: 2, 4, 6, 8, 10
    }
}
?>