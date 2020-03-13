<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de la base</title>
</head>

<body>
    <table>
        <?php
        require_once("modeles/class.gestionConnexion.inc.php");
        require_once("modeles/pdo.php");
        require_once("modeles/soiree.dao.php");
        require_once("modeles/soiree.class.php");
        $conn = PdoSoiree::getPdoSoiree();
        $soireeDAO = new SoireeDAO();
        $listeSoirees = $soireeDAO->recupererSoirees();
        ?>
    </table>
</body>

</html>