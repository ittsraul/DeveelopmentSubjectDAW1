<?php
require_once "./autoloader.php";

$deluser = new GestionUsuarios();
$mensaje = (isset($_GET["nick"])) ?
    "Se ha borrado " . $cartera->DeleteUser($_GET["nick"]) . " Usuario" :
    "";

?>
