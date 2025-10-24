<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $tabla = $_POST['num'];
        $resultado = "";
        for($i = 0; $i <= 10; $i++){
            $resultado .= "$tabla x $i = ".$tabla * $i. "<br>";
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tablas de multiplicar</h1>
    <form action="" method="post">
        <label for="numero">Tabla:</label>
        <input type="text" id="numero" name="num" required>
        <input type="submit" value="Generar tabla">
        <?php if(isset($resultado)) echo $resultado ?>
</body>
</html>