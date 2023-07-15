<main>
    <div class="container-fluid border border-2 rounded col-10 mx-auto p-2 m-2">
        <div class="row m-2">
            <h1 class="text-center">Liste des projets</h1>
            <div class="col-12">
                <div class="input-group mb-2 mx-auto col-2">
                    <input type="text" class="form-control" placeholder="mots-clefs, sujet, nom du projet,..." aria-label="Username" aria-describedby="basic-addon1">
                    <span class="input-group-text" id="basic-addon1"><button type="button" class="btn">Rechercher</button></span>
                </div>
                <main class="container py-4">
                    <h1 class="mb-4">Liste des Projets</h1>

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Projet 1</h5>
                                    <p>Auteur</p>
                                    <p class="card-text">Description du Projet 1...</p>
                                    <a href="/controllers/forum/projectCtrl.php" class="btn btn-primary">Voir le Projet</a>
                                </div>
                            </div>
                        </div>
                        <!-- Répéter le bloc de code ci-dessus pour chaque projet -->
                    </div>
                </main>
                <div class="input-group mb-2 mx-auto d-flex justify-content-center">
                <span class="input-group-text" id="basic-addon1">
                        <a href="/controllers/forum/addProjectCtrl.php">
                            <button type="button" class="btn btn-light">Créer son projet</button>
                        </a>
                    </span>
                    <span class="input-group-text" id="basic-addon1">
                        <a href="/controllers/addTeamCtrl.php">
                            <button type="button" class="btn btn-light">Créer son équipe</button>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</main>