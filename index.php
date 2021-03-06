<!DOCTYPE html>
<html lang="fr">
<?php
require_once("modeles/class.gestionConnexion.inc.php");
require_once("modeles/pdo.php");
require_once("modeles/compte.dao.php");
require_once("modeles/compte.class.php");
require_once("modeles/usager.dao.php");
require_once("modeles/usager.class.php");
require_once("modeles/soiree.dao.php");
require_once("modeles/soiree.class.php");
require_once("modeles/reservation.dao.php");
require_once("modeles/reservation.class.php");
require_once("modeles/listeCompte.dao.php");
require_once("modeles/listeCompte.class.php");
// require_once("modeles/listeReservation.dao.php");
require_once("modeles/listeReservation.class.php");
require_once("vues/v_layout_entete.html");
?>
<body>
    <?php
    if (!isset($_REQUEST['controleur']))
        $controleur = 'accueil';
    else
        $controleur = $_REQUEST['controleur'];
    $connexion = PdoSoiree::getPdoSoiree();
    require_once("vues/v_menu.php");
    
    // objects DAO
    $soireeDAO = new SoireeDAO();
    $reservationDAO = new ReservationDAO();
    $compteDAO = CompteDAO::getCompteDAO();
    $listeCompteDAO = new ListeCompteDAO($compteDAO);

    $listeSoirees = $soireeDAO->recupererSoirees();
    $listeReservations = $reservationDAO->recupererReservations();
    $listeComptes = new ListeComptes($listeCompteDAO);
    // $listeReservations = ListeReservations::getListeReservations();
    switch ($controleur) {
        case 'accueil': {
                require_once("vues/v_accueil.php");
                break;
            }
        case 'compte': {
                require_once("controleurs/c_compte.php");
                break;
            }
        case 'gererSoiree': {
                require_once("controleurs/c_soiree.php");
                break;
            }
        case 'reservation': {
                require_once("controleurs/c_reservation.php");
                break;
            }
    }
    require_once("vues/v_layout_pied.html"); ?>
</body>

</html>