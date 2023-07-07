<div class="container">
    <div class="row">
        <h2>Ajout de votre projet :</h2>
        <div class="col-8 m-5">
            <form method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="title">Titre de votre projet</span>
                    <input type="text" name="title" class="form-control" placeholder="Titre" aria-label="title" aria-describedby="title" required>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Description de votre projet</span>
                    <textarea name="projectDesc" class="form-control" aria-label="With textarea" required></textarea>
                </div>

                <div class="btn-group mb-3" role="group" aria-label="Basic checkbox toggle button group">
                    <!-- foreach pour chaque langage -->
                    <input type="checkbox" class="btn-check" id="languages[]" name="languages[]" autocomplete="off">
                    <label class="btn btn-outline-primary" for="languages[]">HTML</label>
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="imageProject">Image d'illustration</label>
                    <input name="imageProject" type="file" class="form-control" id="imageProject">
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
        </div>
    </div>
</div>