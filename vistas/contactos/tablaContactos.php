<?php
require_once "../../clases/Conexion.php";
$con=new Conexion();
$conexion=$con->conectar();
$sql="SELECT 
            contacto.nombre AS nombre,
            contacto.paterno AS paterno,
            contacto.telefono AS  telefono,
            contacto.email AS email,
            categoria.nombre AS categoria,
            contacto.id_contacto AS idContacto
      FROM
            t_contacto AS contacto
      INNER JOIN
            t_categoria AS categoria ON contacto.id_categoria = categoria.id_categoria;";

$result=mysqli_query($conexion,$sql);

?>


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
                <?php 
                    while ($mostrar=mysqli_fetch_array($result)){
                    $idContacto=$mostrar['idContacto'];
                ?>
                <tr>
                    <td><?php echo $mostrar['nombre'] ?></td>
                    <td><?php echo $mostrar['paterno']?></td>
                    <td><?php echo $mostrar['telefono'] ?></td>
                    <td><?php echo $mostrar['email'] ?></td>
                    <td><?php echo $mostrar['categoria'] ?></td>
                    <td>
                        <span class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalActualizarContacto">
                            <span class="fas fa-edit"></span>
                        </span>
                    </td>
                    <td>
                        <span class="btn btn-danger btn-sm" onclick="eliminarContacto('<?php echo $idContacto ?>')">
                            <span class="fas fa-trash-alt"></span>
                        </span>
                    </td>
                </tr>
                <?php } ?>
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