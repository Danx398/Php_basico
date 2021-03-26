<?php
    include "Animales.php";
    include "conexion.php";    
    $nombre = $_POST['nameAnimales'];

    $Animales = new Animales();
    $respuesta = $Animales->agregarAnimales($nombre);
        if ($respuesta) {
            header("location:index.php");
        }else{
            echo $respuesta;
        }
    
?>