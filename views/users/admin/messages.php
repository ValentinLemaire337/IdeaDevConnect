<div class="container">
    <div class="row">
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Message :</th>
                        <th scope="col">Envoyé le :</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($messages as $message) {
                    ?>
                        <tr>
                            <td><?= htmlentities($message->post) ?></td>
                            <td><?= htmlentities($message->created_at) ?></td>
                            <td>
                                <a href="/controllers/editMessageCtrl.php?id=<?= htmlentities($message->posts_id) ?>"><i class="far fa-edit"></i></a>
                                <a href="/controllers/deleteMessageCtrl.php?id=<?= $message->posts_id ?>"><i class="fas fa-trash fs-5"></i></a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>