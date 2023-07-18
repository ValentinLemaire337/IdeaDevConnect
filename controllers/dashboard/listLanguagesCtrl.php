<?php
require_once __DIR__ . '/../../config/constants.php';
require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/Languages.php';
SessionFlash::start();

try {
    $messages = Posts::getAll();
    var_dump($messages);
    die;
} catch (\Throwable $th) {
    //throw $th;
}



include __DIR__ . '/../../views/templates/header.php';
include __DIR__ . '/../../views/users/admin/messages.php';
include __DIR__ . '/../../views/templates/footer.php';