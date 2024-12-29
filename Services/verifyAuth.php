<?php
session_start();

require_once("./Entidades/Usuario.php");
require_once("./BLL/SeccionBLL.php");
require_once("./Entidades/Seccion.php");

// Verifica si el usuario está autenticado
if (!isset($_SESSION["Usuario"])) {
    // Si no hay sesión activa, redirige al login
    header('Location: ./login.php');
    exit;
}
$usuario = unserialize($_SESSION["Usuario"]);




