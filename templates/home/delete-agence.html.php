<h1 class="text-center">Suppression de l'agence <?= $data['name'] ?></h1>

<form class="text-center" action="/?controller=home&action=delete&id=<?= $data['id'] ?>" method="POST">
    <div>
        <label for="choice">Êtes-vous sûr de vouloir supprimer la société <?= $data['name'] ?> ? (id n°<?=$data['id']?>)</label>
    </div>

    <div>
        <input type="radio" name="choice" value="yes" id="oui"> 
        <label for="oui">Oui</label>
    </div>
    <div>
        <input type="radio" name="choice" value="no" id="non"> 
        <label for="non">Non</label>
    </div>
    <br>
    <div>
        <a class="btn btn-info" href="/?controller=home&action=agences">Annuler</a>
        <input class="btn btn-danger" type="submit" name="submit" value="Supprimer">
    </div>
</form>