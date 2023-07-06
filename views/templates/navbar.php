
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/controllers/homeCtrl.php">
            <img class="logo" src="/public/assets/img/IDClogo.png" alt="logo IdeaDevConnect">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="/controllers/signUpCtrl.php">Inscription</a> <!-- disparait quand user connecté -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/controllers/signInCtrl.php">Connexion</a>    <!-- disparait quand user connecté -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/controllers/forumCtrl.php">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/controllers/profilCtrl.php">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/controllers/messageCtrl.php">Messagerie</a>  <!-- apparait quand user connecté -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/controllers/dashboardCtrl.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/controllers/forum.php">Déconnexion</a>   <!-- apparait quand user connecté -->
                </li>
            </ul>
        </div>
    </div>
</nav>