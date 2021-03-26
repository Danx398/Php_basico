<?php
$nombreArchivo = "archivos/" . $_FILES['miArchivo']['name'];
$exito = move_uploaded_file($_FILES['miArchivo']['tmp_name'], $nombreArchivo);

if ($exito) {
    echo "Archivo subido";
} else {
    echo "No se subio el archivo";
}
?>