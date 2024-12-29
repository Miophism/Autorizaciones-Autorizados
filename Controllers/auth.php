<?php
require_once("../Entidades/Usuario.php");
require_once("../BLL/UsuarioBLL.php");
require_once("../BLL/PerfilBLL.php");


if (isset($_POST["email"]) && !empty($_POST["email"])) {
    $email = trim($_POST["email"]);
}


if (isset($_POST["contrasena"]) && !empty($_POST["contrasena"])) {
    $contrasena = trim($_POST["contrasena"]);
}

$usuario = UsuarioBLL::authUser($email, $contrasena);


if (!$usuario) {
    header('Location: ../login.php');
    exit;
}

session_start();

$_SESSION["Usuario"] = serialize($usuario);

header('Location: ../perfil.php?id=' . $usuario->getId());
exit;
