<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de la base</title>
</head>
<body>
    <?php 
    require_once './modeles/class.gestionConnexion.inc.php';
    $model = new GestionConnexion();
    $conn = $model->getConnexion();
?>
</body>
</html>


wxcde45PT