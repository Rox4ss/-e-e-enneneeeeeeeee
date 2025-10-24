<?php
$palabras = ["Hola", "mundo", "desde", "PHP"];
$resultado = "";

for ($i = 0; $i < count($palabras); $i++) {
    $resultado .= $palabras[$i] . " ";
}

echo trim($resultado);
?>