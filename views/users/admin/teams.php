<div class="container">
    <div class="row">
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nom de l'équipe</th>
                        <th scope="col">Présentation</th>
                        <th scope="col">Créée le</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($teams as $team) {
                        // var_dump($teams);
                    ?>
                        <tr>
                            <td><?= htmlentities($team->teams_name) ?></td>
                            <td><?= htmlentities($team->description) ?></td>
                            <td><?= htmlentities($team->created_at) ?></td>
                            <td>
                                <a href="/controllers/editteamCtrl.php?id=<?= htmlentities($team->teams_id) ?>"><i class="far fa-edit"></i></a>
                                <a href="/controllers/dashboard/deleteTeamCtrl.php?id=<?= htmlentities($team->teams_id) ?>"><i class="fas fa-trash fs-5"></i></a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>