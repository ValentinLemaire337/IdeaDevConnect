<?php

require_once __DIR__ .'/../config/constants.php';
require_once __DIR__ . '/../helpers/connect.php';
require_once __DIR__ . '/../models/Teams.php';
require_once __DIR__ . '/../models/Ideas.php';
SessionFlash::start();

try {
    
    $id = $_SESSION['user']->users_id;
        $team = Teams::get($id);
        var_dump($teams);
        // die;
} catch (\Throwable $th) {
    //throw $th;
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/teams/teamProfil.php';
include __DIR__ . '/../views/templates/footer.php';