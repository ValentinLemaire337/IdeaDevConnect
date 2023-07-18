<?php 


require_once __DIR__ . '/../helpers/connect.php';
require_once __DIR__ . '/../models/Users.php';


try {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
    }
} catch (\Throwable $th) {
    //throw $th;
}


include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/users/message.php';
include __DIR__ . '/../views/templates/footer.php';