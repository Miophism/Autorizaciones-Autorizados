<?php
require_once("AbstractMapper.php");
require_once(__DIR__ . "/../Entidades/Funcion.php");
class FuncionDAL extends AbstractMapper
{



    public function doLoad($columna)
    {
        $funcion= new Funcion(
            $id= (int) $columna["idFuncion"],
            $idFuncionPadre= (int) $columna["idFuncionPadre"],
            $idTipoUsuario= (int) $columna["idTipoUsuario"],
            $idSeccion= (int) $columna["idSeccion"]
        );
        return $funcion;
    }
}
