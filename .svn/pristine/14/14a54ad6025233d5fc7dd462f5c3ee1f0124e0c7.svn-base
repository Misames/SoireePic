<?php

class ListeReservations
{
    private $reservations;

    private static $_instance = null;

    private $listeReservationDAO;

    private function __construct()
    {
        self::$reservations = array();

        $this->$listeReservationDAO = new ListeReservationDAO();
        $this->updateListe();
    }

    public function updateListe()
    {
        $this->$reservations = $listeReservationDAO->updateListe();
    }

    public function rechercherReservation($idSoiree, $idUsager)
    {
        foreach ($this->$reservations as $reservation) {
            if ($reservation->getIdSoiree() == $idSoiree && $reservation->getIdUsager() == $idUsager) {
                return $reservation;
            }
        }
    }

    public static function getListeReservations()
    {
        if (is_null(self::$_instance)) {
            self::$_instance=new ListeReservations();
        }
            
        updateListe();
        return self::$_instance;
    }

    public static function liberer()
    {
        self::$_instance= null;
    }
}