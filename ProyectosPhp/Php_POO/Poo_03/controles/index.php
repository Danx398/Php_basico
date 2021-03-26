<!DOCTYPE html>
<html lang="es">
<head>
    <title>Controles html y js ajax</title>
    
    <script src="jquery-3.5.1.min.js" ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<h2>Controles de formulario con Jquery</h2>
    <form>

        <label>Selecciona operacion</label>
        <select name="opcion" id="opcion">
            <option value="1">Suma</option>
            <option value="2">Resta</option>
            <option value="3">Multiplicación</option>
            <option value="4">División</option>
        </select>
        <br>
        <label>Valor 1</label>
        <input type="text" name="valor1" id="valor1">
        <br>
        <label>Valor 2</label>
        <input type="text" name="valor2" id="valor2">
        <br>
        <button id="btnEnviar">Calcular</button>
    </form>
    <script type= "text/javascript">
        $(document).ready(function(){
            $('#btnEnviar').click(function(){
                /* let valor1 = parseInt($('#valor1').val());
                let valor2 = parseInt($('#valor2').val());
                console.log(valor1 + valor2);
                return false;*/
                let opcion = $('#opcion').val();
                let valor1 = parseInt($('#valor1').val());
                let valor2 = parseInt($('#valor2').val());
                let resultado=0;
                switch(opcion){
                    case "1": 
                        resultado = valor1 + valor2;
                        break;
                    case "2": 
                        resultado = valor1 - valor2;
                        break;
                    case "3": 
                        resultado = valor1 * valor2;
                        break;
                    case "4": 
                        resultado = valor1 / valor2;
                        break;
                }
                swal
                return false;
            });

        });
    </script>
</body>
</html>