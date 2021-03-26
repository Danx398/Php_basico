$(document).ready(function(){
    cargarTablaAnimales();
    $('#btnAgregarAnimal').click(function(){
        $.ajax({
            type: "POST",
            data: $('#frmAnimal').serialize(),
            url: "php.php",
            success:function(respuesta) {
                //fetch javascript ajax 
                respuesta = respuesta.trim();
                if (respuesta == 1) {
                    cargarTablaAnimales();
                    swal(":D", "Agregado con exito!", "success");
                } else {
                    swal(":(", "No se pudo agregar! " + respuesta, "error");
                }
            }
        });
        return false;
    });
});
function cargarTablaAnimales() {
    $.ajax({
            url: "datosTabla.php",
            success:function(respuesta) {
                $('#cargaTabla').html(respuesta);
            }
    });
}

function eliminar(idAnimal) {
    swal({
      title: "Estas seguro de eliminar este registro?",
      text: "Una vez eliminado no podra ser recuperado!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
            type:"POST",
            data:"idAnimal=" + idAnimal,
            url:"eliminar.php",
            success:function(respuesta) {
                respuesta = respuesta.trim();
                if (respuesta == 1) {
                    cargarTablaAnimales();
                    swal(":D", "Eliminado con exito!", "success");
                } else {
                    swal(":(", "No se pudo Eliminar! " + respuesta, "error");
                }
            }
        });
      } 
    });
    
}