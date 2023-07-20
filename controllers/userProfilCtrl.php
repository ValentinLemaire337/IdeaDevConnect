<?php

require_once __DIR__ .'/../config/constants.php';
require_once __DIR__ . '/../helpers/connect.php';
require_once __DIR__ . '/../models/Users.php';
require_once __DIR__ . '/../models/Teams.php';
// require_once __DIR__ . '/../models/Languages.php';
// require_once __DIR__ . '/../models/Ideas.php';
// require_once __DIR__ . '/../models/Posts.php';
SessionFlash::start();


try {
    $id = $_SESSION['user']->users_id;

    $user = User::get($id);
    


} catch (\Throwable $th) {
    throw $th;
}

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/users/profil.php';
include __DIR__ . '/../views/templates/footer.php';
