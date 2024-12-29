<?php
require_once("./Entidades/TipoUsuario.php");
require_once("AbstractMapper.php");

class TipoUsuarioDAL extends AbstractMapper
{

    public function doLoad($columna)
    {
        $tipo = new TipoUsuario(
            $id = (int) $columna["idTipoUsuario"],
            $tipo = (string) $columna["TipoUsuario"]
        );
        return $tipo;
    }
}
