<div id="centre">
    <form action="index.php?controleur=gererSoiree&action=modifierSoiree&id=<?php echo $id; ?>" method="post">
        <label for="nom">Nom :
            <input type="text" name="nom" id="nom" value="<?php echo $nom ?>" /> </label>
        <label for="date"> Date :
            <input type="date" name="date" id="date" value="<?php echo $date; ?>" />
        </label>
        <label for="nombrePlace"> Nombre de place :
            <input type="number" name="nombrePlace" id="nombrePlace" value="<?php echo $nombrePlace ?>" />
        </label>
        <label for="prix"> Prix en €:
            <input type="number" name="prix" id="prix" value="<?php echo $prix; ?>" />
        </label>
        <input class="btn btn-primary" type="submit" value="Valider" />
    </form>
</div>