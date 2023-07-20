<div class="container mt-5 mb-5">
    <h1 class="text-center mb-4">Profil de l'équipe</h1>

    <div class="card mb-4">
        <div class="card-body">
            <h4 class="card-title"><?= $teaminfo->teams_name ?></h4>
            <p class="card-text">Présentation de l'équipe : <?= $teaminfo->description  ?></p>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h4 class="card-title">Projets</h4>
            <ul class="list-group">
                <li class="list-group-item">Projet 1</li>
                <li class="list-group-item">Projet 2</li>
                <li class="list-group-item">Projet 3</li>
            </ul>
        </div>
    </div>

    <div class="card mb-5">
        <div class="card-body mb-5">
            <h4 class="card-title">Membres de l'équipe</h4>
            <ul class="list-group">
                <li class="list-group-item">Membre 1</li>
                <li class="list-group-item">Membre 2</li>
                <li class="list-group-item">Membre 3</li>
            </ul>
        </div>
    </div>
    <div class="text-center mb-5">
        <a href="/controllers/forum/updateTeamCtrl.php?id=<?= $teaminfo->teams_id ?>"><button type="submit" class="btn btn-primary">Modifier l'équipe</button></a>
    </div>
    <div class="text-center mb-3">
        <a href="/controllers/forum/deleteTeamCtrl.php?id=<?= $teaminfo->teams_id ?>" class="btn btn-danger">Supprimer l'équipe</a>
    </div>

</div>