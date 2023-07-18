<?php


require_once __DIR__ .'/../config/constants.php';
require_once __DIR__ . '/../helpers/connect.php';
require_once __DIR__ . '/../models/Ideas.php';
require_once __DIR__ . '/../models/Users.php';

try {
    $ideas = Ideas::getAll();
    // var_dump($ideas);
} catch (\Throwable $th) {
    //throw $th;
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/templates/forum.php';
include __DIR__ . '/../views/templates/footer.php';