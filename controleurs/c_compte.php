<?php

$action = $_REQUEST['action'];
switch ($action) {
    case 'afficherConnecter': {
            include("vues/v_connexion.html");
            break;
        }
    case 'connecter': {
            $login = $_REQUEST["login"];
            $mdp = $_REQUEST["mdp"];

            $res = $connexion->seConnecter($login, $mdp);
            if($res != "Succes"){
                $message = "CONNEXION";
                include("vues/v_message.php");
            } else {
                header("Location: index.php?controleur=accueil");
            }
            break;
        }
    case 'afficherCreerCompte': {
            include("vues/v_creer_compte.html");
            break;
        }
    case 'creerCompte': {
           $nom = htmlentities($_REQUEST["txtnom"]);
           $prenom = htmlentities($_REQUEST["txtprenom"]);
           $dateNaissance = htmlentities($_REQUEST["datenaissance"]);
           $adresse = htmlentities($_REQUEST["txtadresse"]);
           $mail = htmlentities($_REQUEST["mail"]);
           $tel = htmlentities($_REQUEST["tel"]);
           $psw = htmlentities($_REQUEST["password"]);
           // Ajouter la methode dans la classe
           // $connexion->ajouterCompte($nom, $prenom, $dateNaissance, $adresse, $mail, $tel, $psw);
           // $compteDAO->creerCompte($nom, $prenom, $ateNaissance, $adresse, $mail, $tel, $psw);
           header("Location: index.php?controleur=compte&action=afficherConnecter");
           break;
        }
    case "deconnecter" : {
        $connexion->seDeconnecter();
        header("Location: index.php?controleur=accueil");
        break;
    }
}