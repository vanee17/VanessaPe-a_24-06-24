<?php

class homeModel{
    private $PDO;
    public function __construct(){
        require_once("../config/db.php");
        $pdo = new db();
        $this->PDO = $pdo->connection();
    }

    public function guardarRegistro($nombre, $telefono, $correo, $condiciones){
        $statement = $this->PDO->prepare("INSERT INTO prueba_softtek.register (reg_nombre, reg_telefono, reg_correo, reg_condiciones) VALUES ( ?, ?, ?, ?)");
        $statement->bindParam(1, $nombre);
        $statement->bindParam(2, $telefono);
        $statement->bindParam(3, $correo);
        $statement->bindParam(4, $condiciones);

        try {
            return $statement->execute();
        } catch (PDOException $e) {
            return false;
        }
    }
    public function guardarSuscripcion($correo, $condiciones){
        $statement = $this->PDO->prepare("INSERT INTO prueba_softtek.subscribe (sub_correo, sub_condiciones) VALUES ( ?, ?)");
        $statement->bindParam(1, $correo);
        $statement->bindParam(2, $condiciones);

        try {
            return $statement->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    
}