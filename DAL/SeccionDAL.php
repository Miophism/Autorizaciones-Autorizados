<?php
require_once("AbstractMapper.php");
require_once("./Entidades/Seccion.php");

class SeccionDAL extends AbstractMapper
{
    public function findAllSectionByIdTypeUser($idUserType)
    {
        $query= "SELECT * FROM seccion WHERE idTipoUsuario = '$idUserType' ";
        $this->setConsulta($query);
        $listaSecciones= $this->FindAll();
        return $listaSecciones;
    }
    public function doLoad($columna)
    {
        $seccion = new Seccion(
            $id= (int) $columna["idSeccion"],
            $titulo= (string) $columna["Titulo"],
            $url= (string) $columna["Url"],
            $descripcion= (string) $columna["Descripcion"],
            $idTipoUsuario= (string) $columna["idTipoUsuario"],
        );
        return $seccion;
    }
}