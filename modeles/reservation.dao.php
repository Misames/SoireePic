<?php

class ReservationDAO
{
    private $gestionConnexion;

    public function __construct()
    {
        $this->gestionConnexion = GestionConnexion::getConnexion();
    }

    /**
     * (modifier l'id du compte)
     * Permet de reserver des place
     * à une soirée
     * @param string $idSoiree
     * @param string $idCompte
     * @param string $nbPlace
     * @return bool
     */
    public function reserverSoiree(string $idSoiree = "", string $idCompte = "", string $nbPlace = "")
    {
        $rsql = "INSERT INTO reserver (idUsager, idSoiree, nbPlacePrise) VALUE (1, $idSoiree, $nbPlace)";
        $res = $this->gestionConnexion->exec($rsql);
        return $res > 0;
    }

    public function chargerReservation($idUsager, $idSoiree)
    {
        $sql = "SELECT * FROM reserver WHERE idSoiree = $idSoiree AND idUsager = $idUsager";
        $res = $this->gestionConnexion->query($sql);
        $reservation = $res->fetch();
        $objReservation = new Reservation($idUsager, $idSoiree, $reservation["validation"], $reservation["nbPlacePrise"]);
        return $objReservation;
    }

    public function recupererReservations()
    {
        $sql = "SELECT idUsager, idSoiree FROM reserver";
        $res = $this->gestionConnexion->query($sql);
        $tuples = $res->fetchAll();

        $liste = array();
        foreach ($tuples as $tuple) {
            $liste[] = $this->chargerReservation($tuple["idUsager"], $tuple["idSoiree"]);
        }

        return $liste;
    }
}