<div class="container">
    <div class="row">
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nom de l'équipe</th>
                        <th scope="col">Créée le</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($teams as $team) {
                    ?>
                        <tr>
                            <td><?= htmlentities($team->teams_name) ?></td>
                            <td><?= htmlentities($team->created_at) ?></td>
                            <td>
                                <a href="/controllers/teamProfilCtrl.php?id=<?= htmlentities($team->teams_id) ?>">Voir l'équipe</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>