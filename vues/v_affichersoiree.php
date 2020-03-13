<div id="centre">
    <form action="index.php?controleur=gererSoiree&action=supprSoiree" method="post" class="form-group">
        <table class="table" align="center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Intitulé de soirée</th>
                    <th scope="col">Date </th>
                    <th scope="col">Nombre de place</th>
                    <th scope="col">Prix en € </th>
                </tr>
            </thead>
            <?php $i = 0;
            foreach ($listeSoirees as $uneSoirée) { ?>
                <tr>
                    <td><?= ++$i ?></td>
                    <td><?= $uneSoirée->getNom(); ?></td>
                    <td><?= $uneSoirée->getDate(); ?></td>
                    <td><?= $uneSoirée->getNombrePlace(); ?></td>
                    <td><?= $uneSoirée->getPrix(); ?></td>
                    <td><a href="index.php?controleur=gererSoiree&action=afficherModifierSoiree&id=<?= $uneSoirée->getId(); ?>">Modifier</a></td>
                    <td><input value="<?= $uneSoirée->getId(); ?>" name="checkbox[]" type="checkbox" /> </td>
                </tr>
            <?php } ?>
        </table><br />
        <input class="btn btn-primary" type="submit" value='Supprimer' />
    </form>
    <form action="index.php?controleur=gererSoiree&action=ajouterSoiree" method="post" class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" />

        <label for="date"> Date :</label>
        <input type="date" name="date" id="date" />

        <label for="nombrePlace"> Nombre de place :</label>
        <input type="number" min="1" name="nombrePlace" id="nombrePlace" />

        <label for="prix"> Prix en €:</label>
        <input type="number" name="prix" id="prix" />

        <input class="btn btn-primary" type="submit" value="Ajouter" />
    </form>
</div>