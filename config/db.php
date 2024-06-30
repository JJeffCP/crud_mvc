<?php

class db {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "bd_crud";
    
    public function conexion() {
        try {
            $PDO = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->pass);
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $PDO;
        } catch(PDOException $e) {
            die("Error: " . $e->getMessage()); // Detiene la ejecución y muestra el error
        }
    }
}
?>
