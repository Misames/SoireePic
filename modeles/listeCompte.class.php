<?php

class ListeComptes
{
    private $comptes;

    private $listeCompteDAO;

    public function __construct($listeCompteDAO)
    {
        $this->listeCompteDAO = $listeCompteDAO;
        $this->updateListe();
    }

    public function updateListe()
    {
        $this->comptes = $this->listeCompteDAO->updateListe();
    }

    public function getComptes()
    {
        return $this->comptes;
    }

    public function rechercherCompte($idCompte)
    {
        foreach ($this->comptes as $compte) {
            if ($compte->getId() == $idCompte)
                return $compte;
        }
    }
}