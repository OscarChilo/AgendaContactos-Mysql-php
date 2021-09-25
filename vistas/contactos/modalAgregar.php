
<!-- Modal -->
<div class="modal fade" id="modalAgregarContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo Contacto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="frmAgregarContacto">
            <div id="categoriaId"></div>
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" >
            <label for="apaterno">Apellido Paterno</label>
            <input type="text" class="form-control" id="apaterno" name="apaterno">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" >
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btnGuardarContacto">Guardar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
      $('#categoriaId').load("vistas/contactos/selectCategoria.php");
    });

</script>