<?php

require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/Posts.php';
require_once __DIR__ . '/../../models/Users.php';
require_once __DIR__ . '/../../models/Ideas.php';


try {
    $error = 0;
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS));

    if (empty($message)) {
        $errorMessage = MESSAGES['ERROR_MESSAGE_MESSAGE'];
        $error = 1;
    } else {
        $isOk = filter_var($message, FILTER_DEFAULT);
        if (!$isOK) {
            $errorMessage = MESSAGES['ERROR_MESSAGE_MESSAGE'];
            $error = 1;
        }
    }

    if ($error == 0) {
        $messageUser = new Posts;
        $messageUser->set_post($message);
        $response = $messageUser->add();
    }
} catch (\Throwable $th) {
    //throw $th;
}


include __DIR__ . '/../../views/templates/header.php';
include __DIR__ . '/../../views/users/message.php';
include __DIR__ . '/../../views/templates/footer.php';
