<?php 
//sirve para el uso de sesiones 
session_start();
//se valida que la sesión este definida
$valorObtenido = 0;
if(isset($_SESSION['resultadoPrecio'])){
    $valorObtenido = $_SESSION['resultadoPrecio'];
    //se retira el valor de las sesión para que quede indefinida 
    unset($_SESSION['resultadoPrecio']);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obten precio</title>
</head>
<body>
    <form method = "POST" action="procesos/obtenPrecio.php">
    <label>Tipo de Dispositivo</label>
    <select name="tipoMaquina">
        <option value="pc">Pc de escritorio</option>
        <option value="laptop">Laptop</option>
        <option value="tablet">Tablet</option>
    </select>
    <br>
    <button btn btn-primary>Obtener Precio </button>

    </form>
    <hr>
    <p>
        <?php
            if ($valorObtenido > 0) {
                echo $valorObtenido;
            }
        ?>
    </p>
</body>
</html>