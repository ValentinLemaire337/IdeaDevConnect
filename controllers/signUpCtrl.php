<?php
// require __DIR__ . '/../config/default.php';
require_once __DIR__ . '/../helpers/JWT.php';


// $jwt = JWT::set($email);

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // nettoyage et vérification lastname 
        $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES));
        if (empty($lastname)) {
            // message erreur
        } else {
            $isOk = filter_var($lastname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_NAME . '/')));
            if (!$isOk) {
                // message erreur
            }
        }

        // nettoyage et vérification firstname
        $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES));
        if (empty($firstname)) {
            // message erreur
        } else {
            $isOk = filter_var($firstname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_NAME . '/')));
            if (!$isOk) {
                // message erreur
            }
        }

        $mail = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));

        //**** VERIFICATION ****/
        if (empty($mail)) {
            // message erreur
        } else {
            $isOk = filter_var($mail, FILTER_VALIDATE_EMAIL);
            if (!$isOk) {
                // message erreur
            }
            if (User::isMailExist($mail)) {
                // message erreur le mail est deja utilisé
            }
        }

        // si 0 erreurs
        $user = new User;
        $user->set_firstname($firstname);
        $user->set_lastname($lastname);
        $user->set_mail($mail);

        $response = $user->add();

        if($response){
            // message réussite user ajouté
        }
    }
} catch (\Throwable $th) {
    //throw $th;
}

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/users/signup.php';
include __DIR__ . '/../views/templates/footer.php';
