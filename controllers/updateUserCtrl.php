<?php

require_once __DIR__ .'/../config/constants.php';
require_once __DIR__ . '/../helpers/connect.php';
require_once __DIR__ . '/../models/Users.php';
require_once __DIR__ . '/../models/Languages.php';
require_once __DIR__ . '/../models/Ideas.php';
SessionFlash::start();


try {
    $error = 0;


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
        $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $mail = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));

        // $userInfo = User::get($id);

        if(empty($firstname)){
            $errorUpdateFirstname = MESSAGES['ERROR_MESSAGE_FIRSTNAME'];
            $error =1;
        }else{
            $isOk = filter_var($firstname,FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_NAME . '/')));
            if (!$isOk) {
                $errorLastname = MESSAGES['ERROR_MESSAGE_FIRSTNAME'];
                $error = 1;
            }
        }

        if(empty($lastname)){
            $errorUpdateLastname = MESSAGES['ERROR_MESSAGE_LASTNAME'];
            $error = 1;
        }else{
            $isOk = filter_var($lastname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_NAME . '/')));
            if(!$isOk){
                $errorFirstname = MESSAGES['ERROR_MESSAGE_LASTNAME'];
                $error = 1;
            }
        }

        if(empty($mail)){
            $errorUpdateMail = MESSAGES['ERROR_MESSAGE_MAIL'];
            $error = 1;
        }else{
            $isOk = filter_var($mail, FILTER_VALIDATE_EMAIL);
            if(!$isOk){
                $errorMail = MESSAGES['ERROR_MESSAGE_MAIL'];
                $error = 1;
            }
        }

        // var_dump($error);
        // die;
        if($error == 0){
            $updateUser = new User;
            $updateUser->set_firstname($firstname);
            $updateUser->set_lastname($lastname);
            $updateUser->set_mail($mail);
            $response = $updateUser->update($id);
            // var_dump($response);
            // die;
        }

    }
} catch (\Throwable $th) {
    //throw $th;
}

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/users/updateUser.php';
include __DIR__ . '/../views/templates/footer.php';