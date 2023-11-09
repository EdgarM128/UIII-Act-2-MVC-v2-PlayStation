<?php
    require_once("C://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $obj->guardar($_POST['nombre'],$_POST['apellido'],$_POST['direccion'],$_POST['ciudad'],$_POST['pais'],$_POST['gmail']);
?>