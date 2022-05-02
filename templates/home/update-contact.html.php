<h1 class="text-center">Mise à jour de la relation avec l'agence <?= $data['name'] ?></h1>

<form class="text-center" action="/?controller=home&action=updateContact&id=<?= $data['id'] ?>" method="POST">
    <div>
        <label for="choice">Avez-vous envoyé curriculum vitae ainsi que lettre de motivation à l'agence <?= $data['name'] ?> ?</label>
    </div>

    <div>
        <input type="radio" name="choice" value="1" id="oui"> 
        <label for="oui">Oui</label>
    </div>
    <div>
        <input type="radio" name="choice" value="0" id="non"> 
        <label for="non">Non</label>
    </div>
    <br>
    <div>
        <input class="btn btn-success" type="submit" name="submit" value="Mettre à jour">
    </div>
</form>