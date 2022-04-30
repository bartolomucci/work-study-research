<h1 class="text-center">Liste des agences</h1>
<div class="text-left">
    <a class="btn btn-success" href="/?controller=home&action=createForm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
        </svg> Ajout d'une agence </a>
</div>
<br>
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr class="text-center">
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
    <?php foreach ($data as $key) : ?>
        <tbody>
            <tr class="text-center">
                <td><?= $key['name'] ?></td>
                <td><a href="<?= $key['url'] ?>" target="_blank">Lien</a></td>
                <td><?= $key['email'] ?></td>
                <td><?= $key['phone'] ?></td>
                <td><?= $key['country'] ?></td>
                <td><?= $key['city'] ?></td>
                <td><?= $key['address'] ?></td>
                <td><?= $key['zip'] ?></td>
                <?php if ($key['is_contacted'] == 1) : ?>>
                <td><input type="radio" checked></td>
            <?php else : ?>
                <td><input type="radio"></td>
            <?php endif; ?>
            <td>
                <a class="btn btn-warning" href="/?controller=home&action=updateForm&id=<?= $key['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                    </svg></a>
                    <br>
                    <br>
                <a class="btn btn-danger" href="/?controller=home&action=deleteForm&id=<?= $key['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg></a>
            </td>
            </tr>
        </tbody>
    <?php endforeach; ?>
</table>