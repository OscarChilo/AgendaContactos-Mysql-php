$(document).ready(function () {
    $('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php');

    $('.btnGuardarContacto').click(function() { 
      if ($('#idCategoriaSelect').val() == 0) {
        swal("Debes selecciona una categoria");
        return false;
      } else if ($('#nombre').val() == "") {
        swal("Debes agregar el nombre");
        return false;
      }
      agregarContacto();
    });
});


function agregarContacto(){
  $.ajax({
    type: "POST",     
    url: "procesos/contactos/agregarContacto.php",
    data: $('#frmAgregarContacto').serialize(),
   
    success:function(respuesta) {
      respuesta=respuesta.trim();
      if(respuesta==1){
          $('#frmAgregarContacto')[0].reset();
          swal(":D","Se Agrego con exito!","success");
          $('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php');
          
      }else{
          swal(":(","No se pudo Agregar!","error");
      }
    }
  });
}
function eliminarContacto(idContacto){
    swal({
        title: "Estas seguro de eliminar este contacto?",
        text: "Una vez eliminado no podra recuperar!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {

          $.ajax({
            type: "POST",
            data: "idContacto="+idContacto,
            url: "procesos/contactos/eliminarContacto.php",
            success:function(respuesta) {
              respuesta=respuesta.trim();
              if(respuesta==1){
                
                $('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php');
                swal(":D","Se ESlimino con exito!","success");
              }else{
                swal(":(","No se pudo eliminar!","error");
              }
            }
          });
          
        } 
      });
}