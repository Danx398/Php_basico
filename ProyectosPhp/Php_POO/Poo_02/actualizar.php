<?php 
	include "Conexion.php";
	include "Persona.php";
	
	$idPersona = $_POST['idPersona'];
	$paterno = $_POST['paterno'];
	$materno = $_POST['materno'];
	$nombre = $_POST['nombre'];

	$Persona = new Persona();

	$respuesta = $Persona->actualizarPersona($idPersona, $paterno, $materno, $nombre);

	if ($respuesta) {
		header("location:index.php");
	} else {
		echo $respuesta;
	}
?>