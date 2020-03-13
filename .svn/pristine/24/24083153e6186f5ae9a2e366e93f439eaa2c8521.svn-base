<?php

class Usager
{
    private $id;
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $adresse;
    private $mail;
    private $tel;
    private $idType;
    private $identifiant;
    private $password;

    private $usagerDAO;

    public function __construct($id, $usagerDAO)
    {
        $this->id = $id;

        $this->usagerDAO = $usagerDAO;

        // Recupérer les valeurs de la BDD et les assigner dans les variables
        $this->nom = "";
        $this->prenom = "";
        $this->dateNaissance = "";
        $this->adresse = "";
        $this->mail = "";
        $this->tel = "";
        $this->idType = 0;
        $this->identifiant = "";
        $this->password = "";
    }

    public function __construct1($id, $nom, $prenom, $dateNaissance, $adresse, $mail, $tel, $compte, $identifiant, $password)
    {
        $this->id = $id;

        $this->usagerDAO = new UsagerDAO();

        // Recupérer les valeurs de la BDD et les assigner dans les variables
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->adresse = $dateNaissance;
        $this->mail = $mail;
        $this->tel = $tel;
        $this->idType = $compte->getId();
        $this->identifiant = $identifiant;
        $this->password = $password;
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

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    public function getIdType()
    {
        return $this->idType;
    }

    public function setIdType($idType)
    {
        $this->idType = $idType;
    }

    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function ajouterCompte()
    {
        // Utilisation de la classe DAO
    }

    public function supprimerCompte()
    {
        // Utilisation de la classe DAO
    }

    public function modifierCompte()
    {
        // Utilisation de la classe DAO
    }
}