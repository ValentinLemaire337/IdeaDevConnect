<?php

require_once __DIR__ . '/../config/constants.php';
require_once __DIR__ . '/../helpers/connect.php';
require_once __DIR__ . '/../models/Users.php';


try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id = $_SESSION['user']->users_id;
        $oldPassword = $_POST['oldPassword'];
        $newPassword = $_POST['newPassword'];
        $confirmPassword = $_POST['confirmPassword'];

        $getUser = User::get($id);

        $passwordHashed = $getUser->password;
        $passwordVerified = password_verify($oldPassword, $passwordHashed);

        if (!$passwordVerified) {
            $error = 1;
            $errorPassword = MESSAGES['ERROR_MESSAGE_PASSWORD'];
        } else {
            if ($newPassword == $confirmPassword) {
                $newPassword = filter_input(INPUT_POST, 'password', FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_PWD . '/')));
                if ($newPassword) {
                    $passwordHashed = password_hash($newPassword, PASSWORD_DEFAULT);
                    var_dump($passwordHashed);
                } else {
                    $errorPassword = MESSAGES['ERROR_MESSAGE_PASSWORD'];
                    $error = 1;
                    var_dump('a');
                }
            } else {
                $errorPassword = MESSAGES['ERROR_MESSAGE_PASSWORD'];
                var_dump('pb mdp');
                $error = 1;
            }
        }

        if ($error == 0) {
            $user = new User;
            $user->set_password($passwordHashed);
            $response = $user->updatePassword($id);
            if ($response) {
                // message réussite mdp changé
                $successAdd = MESSAGES['SUCCESS_MESSAGE_USER'];
                header('location: /controllers/homeCtrl.php');
            }
        }
    }
} catch (\Throwable $th) {
    //throw $th;
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/users/changePassword.php';
include __DIR__ . '/../views/templates/footer.php';
