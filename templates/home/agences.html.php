<a href="/?controller=home&action=createForm"> Ajout d'une agence </a> 
        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Site Internet</th>
                <th>Email</th>
                <th>Numéro de téléphone</th>
                <th>Pays</th>
                <th>Ville</th>
                <th>Adresse</th>
                <th>Code Postal</th>
                <th>A postulé</th>
                <th>Actions</th>
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



