<?php

require_once __DIR__ .'/../config/constants.php';
require_once __DIR__ . '/../helpers/connect.php';
require_once __DIR__ . '/../models/Teams.php';
require_once __DIR__ . '/../models/Ideas.php';
require_once __DIR__ . '/../models/Users.php';
SessionFlash::start();

try {
    $idTeam = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
    $id = $_SESSION['user']->users_id;
        $teaminfo = Teams::getTeam($idTeam);
        // var_dump($teaminfo);
        // $team = Teams::get($id);
        // var_dump($team);
        // die;
} catch (\Throwable $th) {
    throw $th;
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/teams/teamProfil.php';
include __DIR__ . '/../views/templates/footer.php';