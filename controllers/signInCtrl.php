<?php

    require_once __DIR__ . '/../config/constants.php';
    require_once __DIR__ . '/../helpers/connect.php';
    require_once __DIR__ . '/../models/Users.php';

    try {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $mail = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
            $password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);

            // utilisation de password_verify($password, $passwordHash);
            $getUser = User::getByMail($mail);
            var_dump($getUser);
            var_dump($password);
            $passwordHashed = $getUser->password;
            var_dump($passwordHashed);
            $passwordVerified = password_verify($password, $passwordHashed);
            var_dump($passwordVerified);
            if(!$getUser){
                $errorMail = MESSAGES['ERROR_MESSAGE_MAIL'];
                var_dump('pas de mail valide');
                die;
            }else{
                var_dump('c\'est bon');
            }
        }
    } catch (\Throwable $th) {
        //throw $th;
    }


    include __DIR__ . '/../views/templates/header.php';
        include __DIR__ . '/../views/users/signin.php';
    include __DIR__ . '/../views/templates/footer.php';