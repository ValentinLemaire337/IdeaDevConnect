<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <img src="/public/assets/img/default-avatar.jpg" class="rounded-circle mb-3" alt="Image de profil" width="150">
                    <h4 class="card-title"> <?= $user->lastname. ' '. $user->firstname; ?></h4>
                    <p class="card-text">Adresse mail : <?= $user->mail?></p>
                    <h3>Mes langages : </h3>
                    <div class="d-flex flex-wrap mb-3">
                        <span class="badge bg-primary me-2">HTML</span>
                        <span class="badge bg-primary me-2">CSS</span>
                        <span class="badge bg-primary me-2">JavaScript</span>
                    </div>
                    <h5 class="card-subtitle mb-3">Équipes rejointes :</h5>
                    <div class="d-flex flex-wrap mb-3">
                        <?php foreach ($userTeams as $userTeam ){?>
                        <a href="/controllers/teamProfilCtrl.php" class="btn btn-primary me-2"><?= $userTeam->teams_name?></a>
                        <?php } ?>
                    </div>
                    <a href="/controllers/updateUserCtrl.php" class="btn btn-primary">Modifier les informations</a>
                    <a href="/controllers/changePasswordCtrl.php" class="btn btn-primary">Modifier le mot de passe</a>
                </div>
                <div class="text-center mb-3">
                    <a href="/controllers/deleteUserProfilCtrl.php" class="btn btn-danger">Supprimer mon compte</a>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Liste de vos projets publiés</h5>
                <ul class="list-group d-flex justify-content-between">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <p>Nom du projet</p>
                        <a href="/controllers/forum/projectCtrl.php" class="btn btn-primary">Accèder au projet</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <p>Nom du projet</p>
                        <a href="/controllers/forum/projectCtrl.php" class="btn btn-primary">Accèder au projet</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <p>Nom du projet</p>
                        <a href="/controllers/forum/projectCtrl.php" class="btn btn-primary">Accèder au projet</a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="card mt-4 mb-5">
            <div class="card-body">
                <h5 class="card-title">Liste de vos commentaires</h5>
                <ul class="list-group d-flex justify-content-between">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Commentaire 1
                        <a href="/controllers/forum/projectCtrl.php" class="btn btn-primary">Voir la page du projet</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Commentaire 2
                        <a href="/controllers/forum/projectCtrl.php" class="btn btn-primary">Voir la page du projet</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Commentaire 3
                        <a href="/controllers/forum/projectCtrl.php" class="btn btn-primary">Voir la page du projet</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>