<div class="container">
    <div class="row">
        <div>
        <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Membre depuis le</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($users as $user) {
            ?>
                <tr>
                    <td><?= htmlentities($user->firstname) ?></td>
                    <td><?= htmlentities($user->lastname) ?></td>
                    <td><a href="mailto:<?= htmlentities($user->mail) ?>"><?= htmlentities($user->mail) ?></a></td>
                    <td><?= htmlentities($user->created_at) ?></td>
                    <td>
                        <a href="/controllers/dashboard/deleteUserCtrl.php?id=<?= $user->users_id ?>"><i class="fas fa-trash fs-5"></i></a>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
        </div>
    </div>
</div>