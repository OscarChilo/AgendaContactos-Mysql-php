<?php
    require_once "../../clases/Contactos.php";
    $Contactos=new Contactos();

    $datos=array(
        "idCategoria"=>$_POST['idCategoriaSelect'],
        "nombre"=>$_POST['nombre'],
        "paterno"=>$_POST['apaterno'],
        "telefono"=>$_POST['telefono'],
        "email"=>$_POST['email']
    );
     echo $Contactos->agregarContacto($datos);
?>