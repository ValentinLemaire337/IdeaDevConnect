<?php

require_once __DIR__ . '/../config/constants.php';
// require_once __DIR__ . '/../helpers/JWT.php';
require_once __DIR__ . '/../models/Users.php';


// $jwt = JWT::set($email);

try {
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
            }
        }

        // nettoyage et vérification firstname
        $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES));
        var_dump($firstname);
        if (empty($firstname)) {
            var_dump('pas de firstname');
        } else {
            $isOk = filter_var($firstname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_NAME . '/')));
            if (!$isOk) {
                $errorFirstname = MESSAGES['ERROR_MESSAGE_FIRSTNAME'];
            }
        }

        $mail = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
        var_dump($mail);
        //**** VERIFICATION ****/
        if (empty($mail)) {
            var_dump('pas de mail');
        }else{
            $isOk = filter_var($mail, FILTER_VALIDATE_EMAIL);
            if (!$isOk) {
                $errorMail = MESSAGES['ERROR_MESSAGE_MAIL'];
            }
            if (User::isMailExist($mail)) {
                var_dump('le mail existe');
            }
        }

        // si 0 erreurs
        $user = new User;
        $user->set_firstname($firstname);
        $user->set_lastname($lastname);
        $user->set_mail($mail);

        $response = $user->add();
        var_dump($response);


        if($response){
            var_dump('add success');
            // message réussite user ajouté
        }
        // header('location: /controllers/forumCtrl.php');
    }

} catch (\Throwable $th) {
    //throw $th;
}

include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/users/signup.php';
include __DIR__ . '/../views/templates/footer.php';
