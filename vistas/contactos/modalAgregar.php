
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
            <div id="categoriasId"></div>
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" >
            <label for="apellido">Apellido Paterno</label>
            <input type="text" class="form-control" id="apellido" name="apellido">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" >
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>