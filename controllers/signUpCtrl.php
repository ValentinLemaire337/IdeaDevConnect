<?php

require_once __DIR__ . '/../config/constants.php';
// require_once __DIR__ . '/../helpers/JWT.php';
require_once __DIR__ . '/../models/Users.php';


// $jwt = JWT::set($email);

try {
    $error = 0;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // nettoyage et vérification lastname 
        $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES));
        var_dump($lastname);
        if (empty($lastname)) {
            var_dump('pas de lastname');
        } else {
            $isOk = filter_var($lastname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_NAME . '/')));
            if (!$isOk) {
                $errorLastname = MESSAGES['ERROR_MESSAGE_LASTNAME'];
                $error = 1;
            }
        }

        // nettoyage et vérification firstname
        $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES));
        var_dump($firstname);
        if (empty($firstname)) {
            var_dump('pas de firstname');
            $error = 1;
        } else {
            $isOk = filter_var($firstname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_NAME . '/')));
            if (!$isOk) {
                $errorFirstname = MESSAGES['ERROR_MESSAGE_FIRSTNAME'];
                $error = 1;
            }
        }

        $mail = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
        var_dump($mail);
        //**** VERIFICATION ****/
        if (empty($mail)) {
            var_dump('pas de mail');
        } else {
            $isOk = filter_var($mail, FILTER_VALIDATE_EMAIL);
            if (!$isOk) {
                $errorMail = MESSAGES['ERROR_MESSAGE_MAIL'];
                $error = 1;
            }
            if (User::isMailExist($mail)) {
                var_dump('le mail existe');
                $error = 1;
            }
        }

        $password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);
        $password1 = filter_input(INPUT_POST, 'password1', FILTER_DEFAULT);

        var_dump($password);
        var_dump($password1);

        if ($password == $password1) {
            $password = password_verify($password, REGEX_PWD);
            $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
            var_dump($passwordHashed);
        }else{
            $errorPassword = MESSAGES['Mot de passe invalide'];
            var_dump('pb mdp');
            $error = 1;
        }

        var_dump($error);
        // si 0 erreurs
        if ($error == 0) {
            $user = new User;
            $user->set_firstname($firstname);
            $user->set_lastname($lastname);
            $user->set_mail($mail);
            $user->set_password($passwordHashed);
            $response = $user->add();
            if ($response) {
                // message réussite user ajouté
                $successAdd = MESSAGES['SUCCESS_MESSAGE_USER'];
                header('location: /controllers/forumCtrl.php');
            }
        }else{
            $errorMsg = MESSAGES['ERROR_MESSAGE_ACCOUNT'];
        }
    }
}catch (\Throwable $th) {
    //throw $th;
}

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/users/signup.php';
include __DIR__ . '/../views/templates/footer.php';
