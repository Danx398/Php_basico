<?php 
	session_start();
	include "../clases/Precios.php";
	$Precios = new Precios();
	$tipoMaquina = $_POST['tipoMaquina'];
	//cuando se crea un objeto, se tiene que poner la variable
	// con -> y se ocupa el metodo que se va a utilizar
	//a su vez, se tienen que tener en cuenta los atrubutos
	$Precios->obtenPrecio($tipoMaquina);
	//funcion para regresar o ir a una ruta de mi proyecto

	header("location:../index.php");
?>