<?php 
	
	$nombre = $_POST['nombre'];
	$conexion = mysqli_connect('localhost:3307','root','','phpv1');
	$sql = "INSERT INTO t_animales (nombre) VALUES ('$nombre')";
	$respuesta = mysqli_query($conexion, $sql);
	echo $respuesta;

 ?>
