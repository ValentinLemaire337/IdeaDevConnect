<?php

session_start();

require_once __DIR__ . '/../helpers/connect.php';
require_once __DIR__ . '/../models/Teams.php';


try {
    $teams = Teams::getAll();
    // var_dump($teams);
} catch (\Throwable $th) {
    //throw $th;
}


include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/teams/teamList.php';
include __DIR__ . '/../views/templates/footer.php';