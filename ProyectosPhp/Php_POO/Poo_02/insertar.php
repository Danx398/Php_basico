<?php
    include "Conexion.php";
    include "Persona.php";
    $paterno = $_POST['paterno'];
    $materno =$_POST['materno'];
    $nombre = $_POST['nombre'];
    $Persona = new Persona();
    $respuesta = $Persona->agregarPersona($paterno, $materno, $nombre);
    if ($respuesta) {
        header("location:index.php");
    }else{
        echo $respuesta;
    }
?>