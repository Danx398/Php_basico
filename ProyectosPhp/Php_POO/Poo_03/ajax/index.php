<!DOCTYPE html>
<html>
<head>
	<title>AJAX</title>
	<script src="jquery-3.5.1.min.js"></script>
	<script src="animales.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<form id="frmAnimal">
		<label>Nombre</label>
		<input type="text" id="nombre" name="nombre">
		<br>
		<button id="btnAgregarAnimal">Agregar</button>
	</form>
	<hr>
	<div id="cargaTabla"></div>
</body>
</html>