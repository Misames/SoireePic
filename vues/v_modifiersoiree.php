<div id="centre">
    <form action="index.php?controleur=gererSoiree&action=modifierSoiree&id=<?= $id; ?>" method="post">
        <label for="nom">Nom :
            <input type="text" name="nom" id="nom" value="<?= $nom ?>" /> </label>
        <label for="date"> Date :
            <input type="date" name="date" id="date" value="<?= $date; ?>" />
        </label>
        <label for="nombrePlace"> Nombre de place :
            <input type="number" name="nombrePlace" id="nombrePlace" value="<?= $nombrePlace ?>" />
        </label>
        <label for="prix"> Prix en €:
            <input type="number" name="prix" id="prix" value="<?= $prix; ?>" />
        </label>
        <input class="btn btn-primary" type="submit" value="Valider" />
    </form>
</div>