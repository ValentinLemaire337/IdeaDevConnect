<?php


    require_once __DIR__ . '/../config/constants.php';
    require_once __DIR__ . '/../helpers/connect.php';
    require_once __DIR__ . '/../models/Users.php';
    SessionFlash::start();

    try {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $error = 0;
            $mail = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
            $password = $_POST['password'];

            // utilisation de password_verify($password, $passwordHash);
            $getUser = User::getByMail($mail);
            // var_dump($getUser);
            // die;
            // var_dump($password);

            $passwordHashed = $getUser->password;
            // var_dump($passwordHashed);

            $passwordVerified = password_verify($password, $passwordHashed);
            // var_dump($passwordVerified);

            if(!$passwordVerified){
                $error = 1;
                $errorPassword = MESSAGES['ERROR_MESSAGE_PASSWORD'];
            }
            if(!$getUser){
                $errorMail = MESSAGES['ERROR_MESSAGE_MAIL'];
                $error = 1;
                // var_dump('pas de mail valide');
                die;
            }

            if($error == 0){
                $_SESSION['user'] = $getUser;
                // var_dump($_SESSION['user']);
                // die;
                header('location: /controllers/forumCtrl.php');
            }
        }
    } catch (\Throwable $th) {
        //throw $th;
    }


    include __DIR__ . '/../views/templates/header.php';
        include __DIR__ . '/../views/users/signin.php';
    include __DIR__ . '/../views/templates/footer.php';