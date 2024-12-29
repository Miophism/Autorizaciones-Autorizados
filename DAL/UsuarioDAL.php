<?php
require_once(__DIR__ . "../../Entidades/Usuario.php");
require_once("AbstractMapper.php");

class UsuarioDAL extends AbstractMapper
{
    public function findUser($email, $contrasena): mixed
    {
        $query = "SELECT * FROM usuarios WHERE  Email ='$email' && Contraseña = '$contrasena' ";
        $this->setConsulta($query);
        $result = $this->Find();
        return $result;
    }

    public function doLoad($columna)
    {
        $usuario = new Usuario(
            $id = (int) $columna["idUsuario"],
            $nombre = (string) $columna["Nombre"],
            $apellido = (string) $columna["Apellido"],
            $email = (string) $columna["Email"],
            $contraseña = (string) $columna["Contraseña"],
            $idTipoUsuario = (int) $columna["idTipoUsuario"]

        );
        return $usuario;
    }
}
