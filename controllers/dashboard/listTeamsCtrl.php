<?php

require_once __DIR__ . '/../../config/constants.php';
require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/teams.php';
SessionFlash::start();


try {
    $teams = Teams::getAll();
    // var_dump($teams);
} catch (\Throwable $th) {
    //throw $th;
}


include __DIR__ . '/../../views/templates/header.php';
    include __DIR__ . '/../../views/users/admin/teams.php';
include __DIR__ . '/../../views/templates/footer.php';