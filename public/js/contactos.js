$(document).ready(function () {
    $('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php')
});

function eliminarContacto(){
    swal({
        title: "Estas seguro de eliminar este contacto?",
        text: "Una vez eliminado no podra recuperar!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Ha sido Eliminado!");
        } 
      });
}