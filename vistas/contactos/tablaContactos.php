<div class="card">
  <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover table-condensed" id="tablaContactosDT">
            <thead>
                <tr>
                    <th>Nombre</th><th>Apellido Paterno</th><th>Telefono</th><th>Email</th><th>Categoria</th><th>Editar</th><th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <span class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalActualizarContacto">
                            <span class="fas fa-edit"></span>
                        </span>
                    </td>
                    <td>
                        <span class="btn btn-danger btn-sm" onclick="eliminarContacto()">
                            <span class="fas fa-trash-alt"></span>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tablaContactosDT').DataTable();
    });
</script>