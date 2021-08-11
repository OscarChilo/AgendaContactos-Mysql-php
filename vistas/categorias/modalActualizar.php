<!-- Modal -->
<div class="modal fade" id="modalActualizarCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Categoria</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="frmActualizarCategoria">
            <input type="text" name="idCategoria" id="idCategoria" hidden="">
            <label for="nombreCategoriaU">Nombre</label>
            <input type="text" id="nombreCategoriaU"  name="nombreCategoriaU" class="form-control">
            <label for="descrpcionU">Descripcion</label>
            <textarea name="descripcionU" id="descripcionU" class="form-control"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning">Actualizar</button>
      </div>
    </div>
  </div>
</div>