$(document).ready(function () {
    $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
});

function eliminarCategoria(){
    swal({
        title: "Estas seguro de eliminar esta categoria?",
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