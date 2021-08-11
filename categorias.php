<!DOCTYPE html>
<html>
    <head>
        <title>Categorias</title>
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
                <h3 class="display-5"><p class="text-center"><b>CATEGORIAS</b></p></h3>
                <br>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarCategoria">
                    <span class="fas fa-book-medical"></span>Agregar Categoria
                </button>
  
                <br class="my-4">
                <div id="cargaTablaCategorias"></div>
            </div>
            <?php require_once "vistas/categorias/modalAgregar.php";?>
            <?php require_once "vistas/categorias/modalActualizar.php";?>

        </div>
        <script src="public/js/categorias.js"></script>
    </body>
</html>