<?php

class ListeCompteDAO
{
    private $gestionConnexion;
    private $compteDAO;

    public function __construct($compteDAO)
    {
        $this->gestionConnexion = GestionConnexion::getConnexion();
        $this->compteDAO = $compteDAO;
    }

    public function updateListe()
    {
        $sql = "SELECT idType FROM typecompte";
        $res = $this->gestionConnexion->query($sql);
        $tuples = $res->fetchAll();

        $liste = array();
        foreach ($tuples as $tuple) {
            $compte = new Compte($tuple["idType"], $this->compteDAO);
            $compte->charger();
            $liste[] = $compte;
        }

        return $liste;
    }
}