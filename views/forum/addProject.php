<div class="container">
    <div class="row mt-5">
        <h2>Ajout de votre projet :</h2>
        <div class="col-8  m-5">
            <form method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="name">Titre de votre projet</span>
                    <input type="text" name="name" class="form-control" placeholder="Titre" aria-label="name" aria-describedby="name" required>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Description de votre projet</span>
                    <textarea name="projectDesc" class="form-control" aria-label="With textarea" required></textarea>
                </div>

                <p>Langages que vous souhaitez utiliser :</p>
                <div class="btn-group mb-3" role="group" aria-label="Basic checkbox toggle button group">
                    <!-- foreach pour chaque langage -->
                    <select name="languages" id="languages">
                        <?php
                        foreach ($languages as $language) {
                        ?>
                            <option value="<?= $language->nameLanguage  ?>"><?= $language->nameLanguage ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
            </form>
        </div>
    </div>
</div>