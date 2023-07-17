<?php

require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/Users.php';
require_once __DIR__ . '/../../models/Languages.php';
require_once __DIR__ . '/../../models/Posts.php';

try {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $idea = Ideas::get($id);
    var_dump($idea);
    die;
} catch (\Throwable $th) {
    //throw $th;
}


include __DIR__ . '/../../views/templates/header.php';
include __DIR__ . '/../../views/forum/project.php';
include __DIR__ . '/../../views/templates/footer.php';