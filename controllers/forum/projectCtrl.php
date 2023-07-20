<?php

use JetBrains\PhpStorm\Language;

require_once __DIR__ . '/../../config/constants.php';
require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/Ideas.php';
require_once __DIR__ . '/../../models/Users.php';
require_once __DIR__ . '/../../models/Languages.php';
require_once __DIR__ . '/../../models/Posts.php';
SessionFlash::start();



try {
    $id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));



    $idea = Ideas::get($id);
    var_dump($idea);
} catch (\Throwable $th) {
    //throw $th;
}


include __DIR__ . '/../../views/templates/header.php';
include __DIR__ . '/../../views/forum/project.php';
include __DIR__ . '/../../views/templates/footer.php';