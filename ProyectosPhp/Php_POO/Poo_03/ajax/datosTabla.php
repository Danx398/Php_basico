<?php 
	$conexion = mysqli_connect('localhost:3307','root','','phpv1');
	$sql = "SELECT id_animal, nombre FROM t_animales";
	$respuesta = mysqli_query($conexion, $sql);
	$cadena = "<table>
					<tr>
						<th>Id animal</th>
						<th>Nombre animal</th>
						<th>Eliminar</th>
					<tr>";
	while($mostrar = mysqli_fetch_array($respuesta)) {
		$idAnimal = $mostrar['id_animal'];
		$cadena = $cadena . '<tr>'.
								'<td>' . $mostrar['id_animal'] . '</td>'.
								'<td>' . $mostrar['nombre']. '</td>'.
								'<td>'.
										'<a href="#" onclick="eliminar('.$idAnimal.')">
											Eliminar
										</a>' . 
								'</td>' .
							'</tr>'; 
	}

	echo $cadena . '</table>';
 ?>