<?php
require_once(__DIR__."(../../DAL/PerfilDAL.php");

class PerfilBLL
{
    public static function getPerfilByIdUser($user)
    {
        $perfilDAL= new PerfilDAL();
        $infPerfil= $perfilDAL->findPerfilByIdUser($user);
        return $infPerfil;
    }
}