<?php

require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/Posts.php';

try {
    $error = 0;
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($message)){
            $errorMessage = MESSAGES['ERROR_UPDATE_MESSAGE'];
            $error = 1;
        }else{
            $isOk = filter_var($message, FILTER_DEFAULT);
            if(!$isOk){
                $error = 1;
                $errorMessage = MESSAGES['ERROR_UPDATE_MESSAGE_CONTENT'];
            }
        }

        if($error == 0){
            $updateMessage = new Posts;
            $updateMessage->set_post($message);
            $response = $updateMessage->update($id);
            if(!$response){
                $errorUpdate = MESSAGES['ERROR_UPDATE_MESSAGE_DB'];
            }
        }
    }
} catch (\Throwable $th) {
    //throw $th;
}


include __DIR__ . '/../../views/templates/header.php';
include __DIR__ . '/../../views/users/updateMessage.php';
include __DIR__ . '/../../views/templates/footer.php';