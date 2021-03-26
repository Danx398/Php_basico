<!DOCTYPE html>
<html>
    <head>
        <title> Formularios </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- cdn- funciona solo con coneccion a internet -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <h1>Trabajo de formularios Danx</h1>
        <div class ="container">
            <div class="row">
                <div class = "col-sm-4">
                    <h3>Forulario con Get</h3>
                    <form method = "GET" action = "recibeGET.php" autocomplete = "off">
                    <label> GET </label>
                    <input type="text" name = "valor1" class = "form-control">
                    <button class = "btn btn-primary"> Enviar </button>
            </form>
                </div>
                <div class = "col-sm-4">
                <h3>Forulario con POST</h3>
        <form method = "POST" action = "recibePOST.php" autocomplete = "off">
            <label> POST </label>
            <input type="text" name = "valor1" class = "form-control">
            <button class = "btn btn-primary"> Enviar </button>
            
        </form>
                
                </div>
                <div class = "col-sm-4">
                <h3>Formulario con post y archivos</h3>
        <form method = "POST" action = "recibefiles.php" autocomplete = "off" enctype= 'multipart/form-data' >
            <input type="file" name = "miArchivo" class = "form-control">
            <button class = "btn btn-primary"> Enviar </button>
            
        </form>
                
                </div>
            </div>
            <hr>
                <div class = "row">

                <div class = "col-sm-4">
                <h3 class = "text-center"> Calculadora Basica</h3>
                <form method = "POST" action ="calcular.php" autocomplete = "off">
                <label>Tipo de operaciones  </label>
                <select name = "tipoOperacion" class = "form.control" require="">
                <option value = "selleccion"> Selecciona una opción</option>
                <option value = "sumar"> Sumar</option>
                <option value = "restar">Restar</option>
                <option value = "dividir"> Dividir</option>
                <option value = "multiplicar">Multiplicar</option>
                </select>
                
                
                <label> Valor numero 1</label>
                <input type = "number" name ="valor1" class = "form-control" require="">
                <label> Valor numero 2</label>
                <input type = "number" name ="valor2" class = "form-control" require="">
                <br>
                <button class = "btn btn-primary">Calcular </button>   
                </form>
                </div>
                
                </div>
    </body>
</html>

    

