<?php
include "Conexion.php";
include "Persona.php";
$idPersona = $_POST['idPersonaEliminar'];

$persona = new Persona();
$respuesta = $persona->eliminarPersona($idPersona);
//validaciones
if($respuesta){
    header("location:index.php");
}else{
    echo $respuesta;
}

?>