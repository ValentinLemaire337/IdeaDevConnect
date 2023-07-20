<?php

require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/Teams.php';
require_once __DIR__ . '/../../config/constants.php';
SessionFlash::start();

try {
    $id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));

    $deleteTeam = Teams::delete($id);
    var_dump('delete ok');
    header('location: /controllers/profilCtrl.php');
} catch (\Throwable $th) {
    throw $th;
}


