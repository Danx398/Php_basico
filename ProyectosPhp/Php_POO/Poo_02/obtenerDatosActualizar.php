<?php 
	include "Conexion.php";
	include "Persona.php";

	$idPersona = $_POST['idPersonaActualizar'];
	$Persona = new Persona();
	$datosPersona = $Persona->obtenerDatosPersona($idPersona);
	$id_persona = $datosPersona['id_persona'];
	$paterno = $datosPersona['paterno'];
	$materno = $datosPersona['materno'];
	$nombre = $datosPersona['nombre'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php 
        include "dependencias.php";
    ?>
    <title>Actualizar Persona</title>
    <?php include "dependencias.php";?>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>Actualizar persona</h3>
                    <form method="POST" action="actualizar.php">
                <input type="text" hidden="" name="idPersona"   
				value="<?php echo $id_persona; ?>"> 
                    <label>Apellido paterno</label>
					<input type="text" name="paterno" class="form-control" 
									value="<?php echo $paterno; ?>">
					
					<label>Apellido materno</label>
					<input type="text" name="materno" class="form-control"  
									value="<?php echo $materno; ?>">
					
					<label>Nombre</label>
					<input type="text" name="nombre" class="form-control" 
									value="<?php echo $nombre; ?>">
					<br>
					<button class="btn btn-warning">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>