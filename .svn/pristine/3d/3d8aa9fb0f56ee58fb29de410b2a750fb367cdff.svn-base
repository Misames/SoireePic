<?php

class Soiree
{
    private $id;
    private $nom;
    private $date;
    private $nombrePlace;
    private $prix;
    private $nombrePlaceRestante;

    public function __construct()
    {
        $num_args = func_num_args();
        switch ($num_args) {
            case 2:
                $this->id = func_get_arg(0);
                $this->nom = "";
                $this->date = "";
                $this->nombrePlace = 0;
                $this->prix = 0;
                $this->nombrePlaceRestante = 0;
                break;
            case 6:
                $this->id = func_get_arg(0);
                $this->nom = func_get_arg(1);
                $this->date = func_get_arg(2);
                $this->nombrePlace = func_get_arg(3);
                $this->prix = func_get_arg(4);
                $this->nombrePlaceRestante = func_get_arg(5);

            default:
                # code...
                break;
        }

    }

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getNombrePlace()
    {
        return $this->nombrePlace;
    }

    public function setNombrePlace($nombrePlace)
    {
        $this->nombrePlace = $nombrePlace;
    }

    public function getNombrePlaceRestante()
    {
        return $this->nombrePlaceRestante;
    }

    public function setNombrePlaceRestante($nombrePlaceRestante)
    {
        $this->nombrePlaceRestante = $nombrePlaceRestante;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function ajouterSoiree()
    {
        // Utilisation de la classe DAO
        $ordresql = "INSERT INTO soiree VALUES(0, '$date', '$nom', $nombrePlace, $prix)";
        $nb = $this->monPdo->exec($ordresql);
        // Retourne vrai si l'insertion a eu lieu, sinon renvoie faux
        return $nb > 0;
    }

    public function modifierSoiree()
    {
        // Utilisation de la classe DAO
        $ordresql = "UPDATE soiree SET date='$date', nom='$nom', nombreDePlace=$nombrePlace, prix=$prix WHERE idSoiree=$id";
        $nb = $this->monPdo->exec($ordresql);
        // Retourne vrai si la modification a eu lieu, sinon renvoie faux
        return $nb > 0;
    }

    public function supprimerSoiree()
    {
        // Utilisation de la classe DAO
        $ordresql = "DELETE FROM soiree WHERE idSoiree=$id";
        $nb = $this->monPdo->exec($ordresql);
        // Retourne vrai si la suppression a eu lieu, sinon renvoie faux
        return $nb > 0;
    }
}