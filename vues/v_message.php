<div align="center" id="centre">
<?php
switch ($message) {
    case 'RESERVATION':
        echo "<h1>Erreur sur la réservation. </h1> <br />";
        echo "<p>Vous avez déjà fait une réservation pour cette soirée. 😅";
        break;
    case 'CONNEXION':
        echo "<h1>Erreur de connexion.</h1> <br />";
        echo "<p>Mauvais mot de passe ou identifiant. 😅";
        break;
    default:
        echo "<p> $message </p>";
        break;
} ?> </div>
