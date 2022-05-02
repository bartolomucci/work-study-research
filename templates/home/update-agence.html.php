<h1 class="text-center">Modification de l'agence <?= $data['name'] ?></h1>

<form class="text-center" action="/?controller=home&action=update&id=<?= $data['id'] ?>" method="POST">
    <div>
        <label class="font-weight-light" for="name">Nom</label>
        <input type="text" name="name" value="<?= $data['name'] ?>">
    </div>
    <div>
        <label class="font-weight-light" for="email">Email</label>
        <input type="text" name="email" value="<?= $data['email'] ?>">
    </div>
    <div>
        <label class="font-weight-light" for="url">Site Internet</label>
        <input type="text" name="url" value="<?= $data['url'] ?>">
    </div>
    <div>
        <label class="font-weight-light" for="country">Pays</label>
        <input type="text" name="country" value="<?= $data['country'] ?>">
    </div>
    <div>
        <label class="font-weight-light" for="city">Ville</label>
        <input type="text" name="city" value="<?= $data['city'] ?>">
    </div>
    <div>
        <label class="font-weight-light" for="address">Adresse</label>
        <input type="text" name="address" value="<?= $data['address'] ?>">
    </div>
    <div>
        <label class="font-weight-light" for="zip">Code Postal</label>
        <input type="text" name="zip" value="<?= $data['zip'] ?>">
    </div>
    <div>
        <label class="font-weight-light" for="phone">Numéro de téléphone</label>
        <input type="text" name="phone" value="<?= $data['phone'] ?>">
    </div>

    <div>
        <input class="btn btn-warning" type="submit" name="submit" value="Modifier">
    </div>
</form>