<main>
    <div class="container-fluid rounded col-10 mx-auto p-2 m-2 divforum">
        <div class="row m-2">
            <h1 class="text-center">Liste des projets</h1>
            <div class="col-12">
                <div class="input-group mb-2 mx-auto col-2">
                    <input type="text" class="form-control" placeholder="mots-clefs, sujet, nom du projet,..." aria-label="Username" aria-describedby="basic-addon1">
                    <span class="input-group-text" id="basic-addon1">Rechercher</span>
                </div>
                <main class="container py-4">
                    <h1 class="mb-4">Liste des Projets</h1>

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach ($ideas as $idea) {
                    ?>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $idea->name ?></h5>
                                    <p>Auteur</p>
                                    <p class="card-text"><?= $idea->description ?></p>
                                    <a href="/controllers/forum/projectCtrl.php?id=<?=$idea->ideas_id?>" class="btn btn-primary">Voir le Projet</a>
                                </div>
                            </div>
                        </div>

                        <?php } ?>
                    </div>
                </main>
                <div class="input-group  mx-auto d-flex justify-content-center divSpan">
                    <span class="mt-3 mx-2 spanBtn" id="basic-addon1">
                        <a <?php if(isset($_SESSION['user'])){ ?>
                        href="/controllers/forum/addProjectCtrl.php"
                        <?php }else{ ?>
                            href="/controllers/signUpCtrl.php">
                            <?php } ?>
                            <button type="button" class="btn btn-light">Créer son projet</button>
                        </a>
                    </span>
                    <span class="mt-3 spanBtn " id="basic-addon1">
                        <a <?php if(isset($_SESSION['user'])){ ?>
                        href="/controllers/addTeamCtrl.php"
                        <?php }else{ ?>
                            href="/controllers/signUpCtrl.php">
                            <?php } ?>
                            <button type="button" class="btn btn-light">Créer son équipe</button>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</main>