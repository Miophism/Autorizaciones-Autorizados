<?php
require_once(__DIR__ . "../../DAL/UsuarioDAL.php");

class UsuarioBLL
{
        public static function authUser($email, $contrasena): mixed
        {
            $usuarioDAL = new UsuarioDAL();
            $resultado = $usuarioDAL->findUser($email, $contrasena);
            return $resultado;
        }
}
