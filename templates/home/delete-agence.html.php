<h2></h2>

<form action="/?controller=home&action=delete&id=<?= $data['id'] ?>" method="POST">
    <div>
        <label for="choice">Êtes-vous sûr de vouloir supprimer la société <?= $data['name'] ?> ? (id n°<?=$data['id']?>)</label>
        <input type="radio" name="choice" value="yes"> Oui 
        <input type="radio" name="choice" value="no"> Non
    </div>
    <div>
        <input type="submit" name="submit" value="Supprimer">
</form>