<?php

require_once __DIR__ . '/../helpers/connect.php';
require_once __DIR__ . '/../config/constants.php';
require_once __DIR__ . '/../models/Users.php';
require_once __DIR__ . '/../models/Ideas.php';
require_once __DIR__ . '/../models/Languages.php';
require_once __DIR__ . '/../models/Teams.php';


// var_dump('test');
try {

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $user = User::get($id);
    $userTeams = User::getTeam($id);
    $userId = User::getId($id);
    var_dump($userId);
    // $ideaLanguage = Ideas::get($id);
    // var_dump($ideaLanguage);
    var_dump($user);
    var_dump($userTeams);
    // die;
} catch (\Throwable $th) {
    //throw $th;
}

include_once __DIR__ . '/../views/templates/header.php';
include_once __DIR__ . '/../views/users/profil.php';
include_once __DIR__ . '/../views/templates/footer.php';