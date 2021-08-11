<!DOCTYPE html>
<html>
    <head>
        <title>Contactos</title>
        <link rel="icon" type="image/png" href="public/img/Favicon.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit-no">
        <?php require_once "dependencias.php";?>

    </head>
    <body>
        <div class="container" >
            <?php require_once "menu.php"; ?>

            <div class="jumbotron" style="background-color: #B5F1E1;">
            
                <br>
                <h3 class="display-5"><p class="text-center"><b>CONTACTOS</b></p></h3>
                <br>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarContacto">
                    <span class="fas fa-user-plus"></span>Agregar Contacto
                </button>
  
                <br class="my-4">
                <div id="cargaTablaContactos"></div>
            </div>
            <?php
            require_once "vistas/contactos/modalAgregar.php";
            require_once "vistas/contactos/modalActualizar.php";
            ?>
        </div>
        <script src="public/js/contactos.js"></script>
    </body>
</html>