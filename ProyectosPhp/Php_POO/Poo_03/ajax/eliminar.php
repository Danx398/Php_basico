<?php 

	$conexion = mysqli_connect('localhost:3307','root','','phpv1');
	$idAnimal = $_POST['idAnimal'];
	$sql = "DELETE FROM t_animales WHERE id_animal = '$idAnimal'";
	$respuesta = mysqli_query($conexion, $sql);

	echo $respuesta;
 ?>
