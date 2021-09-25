$(document).ready(function () {
    $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
    $('#btnGuardarCategoria').click(function () { 
        agregarCategoria();
    });
    $('#btnActualizarCategoria').click(function(){
        actualizarCategoria();
    });
});

function agregarCategoria(){
    $.ajax({
        type:"POST",
        
        data:$('#frmAgregarCategoria').serialize(),
        url:"procesos/categorias/agregarCategoria.php",
        
        success:function(respuesta) {
            respuesta=respuesta.trim();
            if(respuesta==1){
                $('#frmAgregarCategoria')[0].reset();
                swal(":D","Se Agrego con exito!","success");
                $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
                
            }else{
                swal(":(","No se pudo Agregar!","error");
            }
        }
    });
}

function eliminarCategoria(idCategoria){
    swal({
        title: "Estas seguro de eliminar esta categoria?",
        text: "Una vez eliminado no podra recuperar!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                type:"POST",
                data:"idCategoria="+idCategoria,
                url:"procesos/categorias/eliminarCategoria.php",
                success:function(respuesta){
                    respuesta=respuesta.trim();
                    if(respuesta==1){
                        $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
                        //$('#frmAgregarCategoria')[0].reset();
                        swal(":D","Se Elimino con exito!","success");
                    }else{
                        swal(":(","No se pudo Eliminar!","error");
                    }
                }
            });
        } 
      });
}
function obtenerDatosCategoria(idCategoria){
    $.ajax({
        type:"POST",
        data:"idCategoria="+idCategoria,
        url:"procesos/categorias/obtenerDatosCategoria.php",
        success:function(respuesta){
            respuesta=jQuery.parseJSON(respuesta);

            $('#idCategoria').val(respuesta['idCategoria']);
            $('#nombreCategoriaU').val(respuesta['nombre']);
            $('#descripcionU').val(respuesta['descripcion']);
        }
    });
}
function actualizarCategoria(){
    $.ajax({
        type:"POST",
        data:$('#frmActualizarCategoria').serialize(),
        url:"procesos/categorias/actualizarCategoria.php",
        
        success:function(respuesta) {
            respuesta=respuesta.trim();
            if(respuesta==1){
                //$('#frmActualizarCategoria')[0].reset();
                swal(":D","Se Actualizo con exito!","success");
                $('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
            }else{
                swal(":(","No se pudo Actualizar!","error");
            }
        }
    });   
}