<?php
require_once __DIR__ . '/../../config/constants.php';
require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/Users.php';
require_once __DIR__ . '/../../models/Teams.php';
require_once __DIR__ . '/../../models/Ideas.php';
SessionFlash::start();

try {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $user = User::get($id);
} catch (\Throwable $th) {
    //throw $th;
}

include __DIR__ . '/../../views/templates/header.php';
include __DIR__ . '/../../views/users/profil.php';
include __DIR__ . '/../../views/templates/header.php';