<?php

class UsagerDAO
{
    private $gestionConnexion;

    public function __construct()
    {
        $this->gestionConnexion = GestionConnexion::getConnexion();
    }

    /**
     * Pas fini
     * Ajouter les '' pour chaque values
     */
    public function ajouterUsager($nom, $prenom, $dateNaissance, $adresse, $mail, $tel, $idType, $password, $identifiant)
    {
        $sql = "INSERT INTO usager (nom, prenom, dateNaissance, adresse, mail, tel, idType, password, identifiant) VALUE (0)";
        $this->gestionConnexion->query($sql);
    }
}
?>