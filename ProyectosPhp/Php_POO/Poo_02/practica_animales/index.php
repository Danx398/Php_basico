<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "dependencias.php" ?>
    <title>Animales</title>
</head>
<body>
    <?php 
        include "conexion.php";
        $Conexion = new Conexion();
        $conectar = $Conexion->conectar();
        
        //query
        $sql = "SELECT id_animales, nombre FROM t_animales";
        $respuesta = mysqli_query($conectar, $sql);
    ?>

    <div class = "container" style = "background-color:#F3D3F7; font-weight: bold;">
        <div class ="row">
            <div class ="col-sm-7">
                <h3>Nuevos Animales</h3>
                <form method ="POST" action="insertar.php" autocomplete ="off"> 
                <label style = "color: purple">Nombre Animales</label>
                <input type="text" name="nameAnimales">

                <button class="btn btn-primary" style = "color: black; font-weight:bold">Insertar</button>
                </form>

            </div>
        </div>
    </div>
    <br>
    <div class="container" style = "background-color:#F3D3F7; font-weight: bold;">
        <div class="table table-responsive table-hover table-condense" id="tablaCrud">
            <div class="col-sm-12">
                <h3 style = "color: blue ; font-weight:bold">Animales</h3>

                <table>
                    <thead>
                        <tr>
                            <th>Id Animales</th>
                            <th>Nombre Animales</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        while($mostrar = mysqli_fetch_array($respuesta)){
                            $idAnimales = $mostrar['id_animales'];
                        
                    ?>
                    <tr>
                            <td><?php echo $mostrar['id_animales']; ?></td>
                            <td><?php echo $mostrar['nombre'];?></td> 
                            
                            <td>  
                                <form method ="POST" action="ObtenerDatosActualizar.php">
                                    <input type="text" name= "idActualizar" value="<?php echo $idAnimales?>" hidden>
                                    <button class= "btn btn-primary btn-warning" style="font-weight: bold">Actualizar</button>
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
                </form>
            </div>
        </div>
    </div>

</body>
</html>