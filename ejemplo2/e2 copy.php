<?php
$array2 = [1,6,3,8,3,9];
$minimo = 9;
$maximo = 0;
foreach($array2 as $n){
    if($n < $minimo){
        $minimo = $n;
    }
    if($n > $maximo){
        $maximo = $n;
    }
}
echo "Minimo: $minimo. Maximo: $maximo";