<h1 class="text-center">Liste des agences</h1>
<a href="/?controller=home&action=createForm"> Ajout d'une agence </a> 
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Site Internet</th>
                <th scope="col">Email</th>
                <th scope="col">Numéro de téléphone</th>
                <th scope="col">Pays</th>
                <th scope="col">Ville</th>
                <th scope="col">Adresse</th>
                <th scope="col">Code Postal</th>
                <th scope="col">A postulé</th>
                <th scope="col">Actions</th>
            </tr>
    </thead>
    <?php foreach($data as $key) : ?>
    <tbody>
            <tr>
                <td><?= $key['name'] ?></td>
                <td><a href="<?= $key['url'] ?>" target="_blank">Lien</a></td>
                <td><?= $key['email'] ?></td>
                <td><?= $key['phone'] ?></td>
                <td><?= $key['country'] ?></td>
                <td><?= $key['city'] ?></td>
                <td><?= $key['address'] ?></td>
                <td><?= $key['zip'] ?></td>
                <?php if($key['is_contacted'] == 1) : ?>>
                     <td><input type="radio" checked></td>
                <?php else : ?>
                    <td><input type="radio"></td>
                <?php endif; ?>
                <td>
                    <a href="/?controller=home&action=updateForm&id=<?= $key['id'] ?>">Modifier</a>
                    <a href="/?controller=home&action=deleteForm&id=<?= $key['id'] ?>">Supprimer</a>
                </td>
            </tr>
    </tbody>
    <?php endforeach; ?>
        </table>



