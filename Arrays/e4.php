<?php
function generarConsecutivos($inicio) {
    $consecutivos = [];
    for ($i = 0; $i < 10; $i++) {
        $consecutivos[] = $inicio + $i;
    }
    return $consecutivos;
}


$resultado = generarConsecutivos(5);
print_r($resultado); 
?>