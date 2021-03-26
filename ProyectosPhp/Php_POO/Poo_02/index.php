<!DOCTYPE html>
<html lang="es">
<head>
    <?php include"dependencias.php"?>
    <title>CRUD con PHP y MySQL</title>
</head>
<body>
    <?php
        include "Conexion.php";
        $Conexion = new Conexion();
        $conectar = $Conexion->conectar();
        //esto es el query 
        $sql = "SELECT id_persona, paterno, materno, nombre FROM t_personas ORDER BY paterno";
        $respuesta = mysqli_query($conectar, $sql);
    ?>
    <div class = "container" style = "background-color:#F3D3F7; font-weight: bold;">
        <div class= "row">
            <div class="col-sm-7">
            <h3 style = "color: blue ; font-weight:bold">Nuevo Campo</h3>
            <form method ="POST" action="insertar.php" autocomplete ="off">
            <label style = "color: purple">Apellido Paterno</label>
            <input type="text" name="paterno">
            <br>
            <label style = "color: purple">Apellido Materno</label>
            <input type="text" name="materno" autocomplete="off">
            <br>
            <label style = "color: purple">Nombre o Nombres</label>
            <input type="text" name="nombre">
            <br>
            <button class="btn btn-primary" style = "color: black; font-weight:bold">Insertar</button>
    </form>
            </div>
        </div>
    </div>
<br>
<hr>
    <div class="container" style = "background-color:#F3D3F7; font-weight: bold;">
        <div class="col-sm-12">
            <div class= "table-responsive">
            <table class= "table table-hover table-condense" id="tablaCrud">
        <thead>
            <tr>
                <th style = "color: purple; font-weight:bold">id persona</th>
                <th style = "color: purple">Apellido Paterno</th>
                <th style = "color: purple">Apellido materno</th>
                <th style = "color: purple">Nombre</th>
                <th style = "color: purple"></th>
                <th style = "color: purple"></th>
                
            </tr>
        </thead>
        <tbody>
        <?php 
            //todo lo que obtenga la respuesta la va a obtener en un arreglo asociativo
            while($mostrar = mysqli_fetch_array($respuesta)){
            $idPersona = $mostrar['id_persona'];
        ?>
        
        <tr>
            <td><?php echo $mostrar['id_persona'];?></td>
            <td><?php echo $mostrar['paterno'];?></td>
            <td><?php echo $mostrar['materno'];?></td>
            <td><?php echo $mostrar['nombre'];?></td>
            <td>
                <form method = "POST" action="obtenerDatosActualizar.php" style="font-weight: bold;" >
                    <input type="text" name= "idPersonaActualizar" value = "<?php echo $idPersona ?>" hidden>
                    <button class="btn btn-warning" style="font-weight: bold;">Actualizar</button>
                </form>
            </td>
            <td>
                <form method = "POST" action="eliminar.php" >
                    <input type="text" name= "idPersonaEliminar" value = "<?php echo $idPersona ?>" hidden>
                    <button class ="btn btn-danger" style="font-weight: bold;">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php 
            }
        ?>
        </tbody>
    </table>
            </div>
        </div>
        </div>
    <script type="text/javascript">
		$(document).ready(function(){
			$('#tablaCrud').DataTable();
		});
	</script>
    
</body>
</html>