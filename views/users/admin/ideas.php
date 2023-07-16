<div class="container mt-5">
    <h1 class="text-center mb-4">Liste des projets</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nom du projet</th>
                <th>Description</th>
                <th>Langages utilisés</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ideas as $idea) {
                var_dump($idea);
            ?>
            <tr>
            <td><?= htmlentities($idea->name) ?></td>
                    <td><?= htmlentities($idea->description) ?></td>
                    <td> reste a faire </td>
                    <td>
                        <a href="/controllers/dashboard/editUserCtrl.php?id=<?= htmlentities($idea->ideas_id) ?>"><i class="far fa-edit"></i></a>
                        <a href="/controllers/dashboard/deleteUserCtrl.php?id=<?= $idea->ideas_id ?>"><i class="fas fa-trash fs-5"></i></a>
                    </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>