<?php


require_once __DIR__ . '/../helpers/connect.php';
require_once __DIR__ . '/../config/constants.php';
require_once __DIR__ . '/../models/Users.php';
require_once __DIR__ . '/../models/Ideas.php';
require_once __DIR__ . '/../models/Languages.php';
require_once __DIR__ . '/../models/Teams.php';
SessionFlash::start();


// var_dump('test');
try {

    $id = $_SESSION['user']->users_id;
    // var_dump($id);

    $user = User::get($id);
    // var_dump($user);
    $userTeams = User::getTeam($id);
    $userId = User::getId($id);
    $userIdeas = User::getAllIdea($id);
    var_dump($userIdeas);
    // $ideaLanguage = Ideas::get($id);
    // var_dump($ideaLanguage);
    // var_dump($user);
    // var_dump($userTeams);
    // die;
} catch (\Throwable $th) {
    //throw $th;
}

include_once __DIR__ . '/../views/templates/header.php';
include_once __DIR__ . '/../views/users/profil.php';
include_once __DIR__ . '/../views/templates/footer.php';