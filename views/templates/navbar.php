
<nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid">
        <a class="navbar-brand" href="/controllers/homeCtrl.php">
            <img class="logo" src="/public/assets/img/IDClogo.png" alt="logo IdeaDevConnect">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto justify-content-end">
                <?php if(!isset($_SESSION['user'])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="/controllers/signUpCtrl.php">Inscription</a> <!-- disparait quand user connecté -->
                </li>
                <?php } ?>
                <?php if(!isset($_SESSION['user'])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="/controllers/signInCtrl.php">Connexion</a>    <!-- disparait quand user connecté -->
                </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="/controllers/forumCtrl.php">Forum</a>
                </li>
                <?php if(isset($_SESSION['user'])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="/controllers/profilCtrl.php?id=<?=$_SESSION['user']->users_id?>">Profil</a>
                </li>
                <?php } ?>
                <?php if(isset($_SESSION['user'])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="/controllers/messageCtrl.php?id=<?=$_SESSION['user']->users_id?>">Messagerie</a>  <!-- apparait quand user connecté -->
                </li>
                <?php } ?>
                <?php if(isset($_SESSION['user']) && ($_SESSION['user']->role == 0)){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="/controllers/dashboard/dashboardCtrl.php">Dashboard</a>
                </li>
                <?php } ?>
                <?php if(isset($_SESSION['user'])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="/controllers/logOutCtrl.php">Déconnexion</a>   <!-- apparait quand user connecté -->
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>