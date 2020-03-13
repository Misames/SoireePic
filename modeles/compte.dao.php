<?php

class CompteDAO
{
    private static $_instance = null;
    private static $gestionConnexion;
    
    private function __construct()
    {
        self::$gestionConnexion= GestionConnexion::getConnexion();
    }

    public static function getCompteDAO()
    {
        if (is_null(self::$_instance)) {
            self::$_instance=new CompteDAO();
        }
        return (self::$_instance);
    }

    public static function liberer()
    {
        self::$_instance= null;
        self::$gestionConnexion= null;
    }

    public function chargerCompte($id)
    {
        $sql = "SELECT libelle FROM typecompte WHERE idType = $id";
        $res = self::$gestionConnexion->query($sql);
        $compte = $res->fetch();
        return $compte;
    }
}