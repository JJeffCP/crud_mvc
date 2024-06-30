<?php 
    require_once("c://xampp/htdocs/crud_mvc/controller/username.controller.php");
    $obj = new usernameController();
    $obj->update($_POST['id'], $_POST['nombre']);

?>