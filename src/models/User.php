<?php

class User {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Método para guardar el usuario en la base de datos
    public function save($connection) {
        // Insertar el usuario en la base de datos
        $sql = "INSERT INTO Usuario (name) VALUES ('$this->name')";
        
        if ($connection->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public static function getAllUsers($connection) {
        $sql = "SELECT * FROM Usuario";

        return $connection->query($sql);
    }

    public static function deleteUser($connection,$id) {
        $sql = "DELETE FROM Usuario where id = '$id'";

        $connection->query($sql); 
    }
}
