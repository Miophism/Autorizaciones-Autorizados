<?php
require_once("AbstractMapper.php");
require_once(__DIR__ . '/../Entidades/Perfil.php');

class PerfilDAL extends AbstractMapper
{

    public function findPerfilByIdUser($usuario)
    {
        $query= "SElECT * FROM perfil WHERE idUsuario = '$usuario->getId()'  ";
        $this->setConsulta($query);
        $result= $this->Find();
        return $result;
    }

    public function doLoad($columna)
    {
        $perfil= new Perfil(
            $idPerfil= (int) $columna["idPerfil"],
            $nombre=(int) $columna["Nombre"],
            $descripcion= (int) $columna["Descripcion"],
            $idUsuario= (string) $columna["idUsuario"]
        );
        return $perfil;
    }
}
