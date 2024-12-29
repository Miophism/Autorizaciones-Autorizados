<?php
require_once(__DIR__."(../../DAL/SeccionDAL.php");

class SeccionBLL
{
    public static function getSectionByTypeUser($idUserType): array
    {
        $seccionDAL= new SeccionDAL();
        $listaSecciones= $seccionDAL->findAllSectionByIdTypeUser($idUserType);
        return $listaSecciones;
    }
}