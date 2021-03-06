<?php

class SoireeDAO
{
    private $gestionConnexion;

    public function __construct()
    {
        $this->gestionConnexion = GestionConnexion::getConnexion();
    }

    public function chargerSoiree($idSoiree)
    {
        $sql = "SELECT idSoiree, nom, date, prixPlace, nombreDePlace, nombreDePlace - (SELECT SUM(nbPlacePrise) FROM reserver WHERE idSoiree=$idSoiree GROUP BY reserver.idSoiree) AS nbPlaceRestante FROM soiree WHERE idSoiree = $idSoiree";
        $res = $this->gestionConnexion->query($sql);
        $soiree = $res->fetch();
        $nombrePlaceRestante = !(isset($soiree["nbPlaceRestante"])) ? $soiree["nombreDePlace"] : $soiree["nbPlaceRestante"];
        if ($nombrePlaceRestante < 0) {
            $nombrePlaceRestante = 0;
        }
        $objSoiree = new Soiree($idSoiree, $soiree["nom"], $soiree["date"], $soiree["nombreDePlace"], $soiree["prixPlace"], $nombrePlaceRestante);
        return $objSoiree;
    }

    public function supprimerSoiree($idSoiree)
    {
        $sql = "DELETE FROM soiree WHERE idSoiree = $idSoiree";
        $nb = $this->gestionConnexion->exec($sql);
    }

    public function ajouterSoiree($date, $nom, $nombreDePlace, $prixPlace)
    {
        $sql = "INSERT INTO soiree (date, nom, nombreDePlace, prixPlace) VALUES ('$date', '$nom', $nombreDePlace, $prixPlace)";
        $nb = $this->gestionConnexion->exec($sql);
        return $nb > 0;
    }

    public function recupererSoirees()
    {
        $sql = "SELECT idSoiree FROM soiree";
        $res = $this->gestionConnexion->query($sql);
        $tuples = $res->fetchAll();

        $liste = array();
        foreach ($tuples as $tuple) {
            $liste[] = $this->chargerSoiree($tuple["idSoiree"]);
        }

        return $liste;
    }
}