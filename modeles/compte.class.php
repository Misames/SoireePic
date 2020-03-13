<?php

class Compte
{
    private $id;
    private $libelle;
    private $compteDAO;

    public function __construct($id, $compteDAO)
    {
        $this->id = $id;

        $this->compteDAO = $compteDAO;

        // Récupérer les valeurs de la BDD et les assigner dans les variables
        $this->libelle = "";
    }

    public function __construct1($id, $libelle, $compteDAO)
    {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->compteDAO = $compteDAO;
    }

    public function charger()
    {
        $tableau = $this->compteDAO->chargerCompte($this->id);
        $this->libelle = $tableau["libelle"];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }
}