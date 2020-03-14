<nav style="height: 10vh;" class="navbar navbar-expand-sm bg-dark text-white  justify-content-center">
    <a class="navbar-brand"> Site des soirée du Pic du Midi</a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php?controleur=accueil">Accueil</a>
        </li>

        <?php if ($connexion->estConnecte()) { ?>
            <?php if ($connexion->estAdmin()) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controleur=gererSoiree&action=afficherListeSoiree">Gérer soirées</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Gerer réservation</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?controleur=compte&action=deconnecter">Se Déconnecter</a>
                </li>

            <?php }
        } else { ?>
            <li class="nav-item">
                <a class="nav-link" href="index.php?controleur=compte&action=afficherConnecter">Se Connecter</a>
            </li>
        <?php } ?>
    </ul>
</nav>