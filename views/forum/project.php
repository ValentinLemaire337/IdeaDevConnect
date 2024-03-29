<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><?= $ideas->name ?></h4>
                    <p class="card-text">Description du projet : <?= $ideas->description ?></p>
                    <p class="card-text">Langages utilisés :</p>
                    <div class="d-flex flex-wrap mb-3">
                        <span class="badge bg-primary me-2">HTML</span>
                        <span class="badge bg-primary me-2">CSS</span>
                        <span class="badge bg-primary me-2">JavaScript</span>
                    </div>
                    <?php if (isset($_SESSION['user'])) { ?>
                        <div class="d-flex justify-content-between">
                            <a href="/controllers/forum/applyProjectCtrl.php" class="btn btn-primary me-2">Postuler à ce projet</a>
                            <a href="/controllers/forum/followProjectCtrl.php" class="btn btn-secondary">Suivre ce projet</a>
                        </div>
                    <?php } ?>
                </div>

            </div>
            <div class="card mt-4 mb-5">
                <div class="card-body">
                    <h5 class="card-title">Espace commentaire</h5>
                    <!-- foreach pour y afficher les commentaires du projet -->
                    <div class="border card-body mt-4 mb-4">
                        <p>Auteur</p>
                        <p>Le : date</p>
                        <p>Ceci est un exemple de commentaire</p>
                    </div>
                    <?php if (isset($_SESSION['user'])) { ?>
                        <form>
                            <div class="mb-5">
                                <label for="comment" class="form-label">Vous voulez participer à la discussion ?</label>
                                <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter un commentaire</button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>