<?php

$action = $_REQUEST["action"];

switch ($action) {
    case 'afficherListeSoiree':
        // $mesSoirées = $connexion->afficherListeSoiree();
        include("vues/v_affichersoiree.php");
        break;
    case 'ajouterSoiree':
        $nom = $_REQUEST["nom"];
        $date = $_REQUEST["date"];
        $nombrePlace = $_REQUEST["nombrePlace"];
        $prix = $_REQUEST["prix"];

        $res = $soireeDAO->ajouterSoiree($date, $nom, $nombrePlace, $prix);
        if ($res) {
            header("Location: index.php?controleur=gererSoiree&action=afficherListeSoiree");
        } else {
            $message = "Erreur";
            include("vues/v_message.php");
        }
        break;
    case 'afficherModifierSoiree':
        $id = $_REQUEST["id"];
        $soiree = $soireeDAO->chargerSoiree($id);
        $nom = $soiree->getNom();
        $date = $soiree->getDate();
        $prix = $soiree->getPrix();
        $nombrePlace = $soiree->getNombrePlace();
        include("vues/v_modifiersoiree.php");
        break;
    case 'modifierSoiree':
        $id = $_REQUEST["id"];
        $nom = $_REQUEST["nom"];
        $date = $_REQUEST["date"];
        $nombrePlace = $_REQUEST["nombrePlace"];
        $prix = $_REQUEST["prix"];
        $res = $connexion->modifierSoiree($id, $date, $nom, $nombrePlace, $prix);
        if ($res) {
            header("Location: index.php?controleur=gererSoiree&action=afficherListeSoiree");
        } else {
            $message = "Erreur";
            include("vues/v_message.php");
        }
        break;
    case 'supprSoiree':
        $tableau = $_REQUEST["checkbox"];
        if (empty($tableau)) {
            header("Location: index.php?controleur=gererSoiree&action=afficherListeSoiree");
        }

        foreach ($tableau as $idSoiree) {
            $soireeDAO->supprimerSoiree($idSoiree);
        }

        // if ($res) {
        header("Location: index.php?controleur=gererSoiree&action=afficherListeSoiree");
        // } 
        // else {
        //     $message = "Erreur";
        //     include("vues/v_message.php");
        // }
        break;
    default:
        # code...
        break;
}