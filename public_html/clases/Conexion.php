<?php
// Raul ha hecho la clase conexion
class Conexion{
    protected $conn;
    public function connect()
    {
        $infoFile = file_get_contents(__DIR__."/../config/dbserver.json");
        $datosDB = json_decode($infoFile,true);

        $servername = $datosDB["servername"];
        $username = $datosDB["username"];
        $password = $datosDB["password"];
        $db = $datosDB["db"];

        //Establece la conexión
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
    }
    protected function disconnect()
    {
        //cierra la conexión
        $this->conn = null;
    }
    public function __destruct()
    {
        $this->disconnect();
    }
}