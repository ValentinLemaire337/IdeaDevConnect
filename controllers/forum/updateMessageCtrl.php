<?php

require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/Posts.php';

try {
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
    }
} catch (\Throwable $th) {
    //throw $th;
}


include __DIR__ . '/../../views/templates/header.php';
include __DIR__ . '/../../views/users/updateMessage.php';
include __DIR__ . '/../../views/templates/footer.php';