<?php
    require_once("C://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $obj->update($_POST['id'],$_POST['nombre'],$_POST['apellido'],$_POST['direccion'],$_POST['ciudad'],$_POST['pais'],$_POST['gmail'],$_POST['fecha']);
?>