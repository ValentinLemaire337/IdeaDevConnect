<div class="container">
    <div class="row">
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Langage :</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($languages as $language) {
                    ?>
                        <tr>
                            <td><?=$language->nameLanguage ?></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>