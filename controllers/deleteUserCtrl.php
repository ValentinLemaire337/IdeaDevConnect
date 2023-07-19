<?php

require_once __DIR__ .'/../config/constants.php';
require_once __DIR__ . '/../helpers/connect.php';
require_once __DIR__ . '/../models/Users.php';
SessionFlash::start();


try {
    $id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));

    $deleteUser = User::delete($id);
    var_dump('delete ok');
    header('location: /controllers/logOutCtrl.php');
} catch (\Throwable $th) {
    //throw $th;
}