<h1 class="text-center">Modification de l'agence <?= $data['name'] ?></h1>

<form class="text-center" action="/?controller=home&action=update&id=<?= $data['id'] ?>" method="POST">
    <div>
        <label for="name">Nom de l'Agence</label>
        <input type="text" name="name" value="<?= $data['name'] ?>">
    </div>
    <div>
        <label for="email">Email de l'Agence</label>
        <input type="text" name="email" value="<?= $data['email'] ?>">
    </div>
    <div>
        <label for="url">Site Internet de l'Agence</label>
        <input type="text" name="url" value="<?= $data['url'] ?>">
    </div>
    <div>
        <label for="country">Pays de l'Agence</label>
        <input type="text" name="country" value="<?= $data['country'] ?>">
    </div>
    <div>
        <label for="city">Ville de l'Agence</label>
        <input type="text" name="city" value="<?= $data['city'] ?>">
    </div>
    <div>
        <label for="address">Adresse de l'Agence</label>
        <input type="text" name="address" value="<?= $data['address'] ?>">
    </div>
    <div>
        <label for="zip">Code Postal de l'Agence</label>
        <input type="text" name="zip" value="<?= $data['zip'] ?>">
    </div>
    <div>
        <label for="phone">Téléphone de l'Agence</label>
        <input type="text" name="phone" value="<?= $data['phone'] ?>">
    </div>

    <div>
        <input class="btn btn-warning" type="submit" name="submit" value="Modifier">
    </div>
</form>