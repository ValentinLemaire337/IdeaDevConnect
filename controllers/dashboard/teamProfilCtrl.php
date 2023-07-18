<?php

session_start();

require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/Teams.php';
require_once __DIR__ . '/../../models/Users.php';
require_once __DIR__ . '/../../models/Ideas.php';


try {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $teamProfil = Teams::get($id);
} catch (\Throwable $th) {
    //throw $th;
}


include __DIR__ . '/../../views/templates/header.php';
include __DIR__ . '/../../views/teams/teamProfil.php';
include __DIR__ . '/../../views/templates/footer.php';