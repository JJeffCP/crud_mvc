<?php

    // echo "<pre>";
    // var_dump($_POST['nombre']);
    // echo "</pre>";

    require_once("c://xampp/htdocs/crud_mvc/controller/username.controller.php");
    $obj = new usernameController;
    $obj->guardar($_POST['nombre']);
?>