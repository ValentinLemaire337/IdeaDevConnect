<?php 

require_once __DIR__ . '/../../config/constants.php';
require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/Teams.php';
SessionFlash::start();

try {

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $teams = Teams::delete($id);
    // var_dump($teams);
    die;
    header('location: /controllers/homeCtrl.php');
} catch (\Throwable $th) {
    //throw $th;
}