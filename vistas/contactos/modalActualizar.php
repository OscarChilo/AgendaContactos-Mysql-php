
<!-- Modal -->
<div class="modal fade" id="modalActualizarContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar un Contacto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="frmActualizarContacto">
            <input type="text" id="idContacto" name="idContacto" hidden="">
            <div id="categoriasIdU"></div>
            <label for="nombreU">Nombre</label>
            <input type="text" class="form-control" id="nombreU" name="nombreU" >
            <label for="apellidoU">Apellido Paterno</label>
            <input type="text" class="form-control" id="apellidoU" name="apellidoU">
            <label for="telefonoU">Telefono</label>
            <input type="text" class="form-control" id="telefonoU" name="telefonoU" >
            <label for="emailU">Email</label>
            <input type="text" class="form-control" id="emailU" name="emailU">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning">Actualizar</button>
      </div>
    </div>
  </div>
</div>