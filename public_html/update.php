<?php
require_once "./autoloader.php";

$updUser = new GestionUsuarios();
if (count($_POST) > 0) $updUser->updateUser($_POST);