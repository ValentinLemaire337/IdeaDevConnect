<?php

session_start();
require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/Posts.php';


try {
    $messages = Posts::getAll();
} catch (\Throwable $th) {
    //throw $th;
}

include __DIR__ . '/../../views/templates/header.php';
    include __DIR__ . '/../../views/users/admin/messages.php'; 
include __DIR__ . '/../../views/templates/footer.php';