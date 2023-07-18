<?php


require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/Users.php';

try {


    $users = User::getAll();
    // var_dump($users);
} catch (\Throwable $th) {
    //throw $th;
}


include __DIR__ . '/../../views/templates/header.php';
    include __DIR__ . '/../../views/users/admin/users.php';
include __DIR__ . '/../../views/templates/footer.php';