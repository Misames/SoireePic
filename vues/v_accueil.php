<div id="centre">
    <table class="table">
        <summary><strong>Liste des soirées à venir</strong></summary>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Intitulé de soirée</th>
                <th scope="col">Date</th>
                <th scope="col">Nombre de places restantes</th>
                <th scope="col">Prix en €</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0;
            foreach ($listeSoirees as $uneSoirée) {
                $dateInfo = date_parse_from_format('Y/m/d', $uneSoirée->getDate());
                $year = $dateInfo['year'];
                $month = $dateInfo['month'];
                $day = $dateInfo['day'];
                if ($year <= date('Y') && $month <= (int)date('n') && $day <= (int)date('j') ) {
                    $nb = $uneSoirée->getNombrePlaceRestante(); ?>
                    <tr>
                        <td><?= ++$i ?> </td>
                        <td><?= $uneSoirée->getNom() ?></td>
                        <td><?= $uneSoirée->getDate() ?></td>
                        <td><?= $nb ?></td>
                        <td><?= $uneSoirée->getPrix() ?></td>
                        <?php if ($connexion->estConnecte()) { ?> <td> <button <?php echo $nb == 0 ? "disabled" : "" ?> onClick="handleModal('<?= $i ?>', '<?= $uneSoirée->getNom() ?>')" id="<?= $i ?>" data-valeurMax="<?= $nb ?>" data-idSoiree="<?= $uneSoirée->getId() ?>" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Réserver</button>
                    </tr> <?php } } } ?>
        </tbody>
    </table>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Réservation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="index.php?controleur=reservation&action=reserver" method="POST">
                    <div class="modal-body">
                        <label for="txt">Nombre de place</label>
                        <input id="txt" type="number" min="1" name="nbplace" required />
                        <input id="idSoiree" type="hidden" value="" name="idsoiree" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Confirmer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>