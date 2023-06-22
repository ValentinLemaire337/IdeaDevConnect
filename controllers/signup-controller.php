<?php
require __DIR__ . '/../config/default.php';
require_once __DIR__ . '/../helpers/JWT.php';


$jwt = JWT::set($email);

include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/users/signup.php';
include __DIR__ . '/../views/templates/footer.php';