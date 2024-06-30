<?php 
    require_once("c://xampp/htdocs/crud_mvc/controller/username.controller.php");
    $obj = new usernameController();
    $obj->delete($_GET['id']);

?>