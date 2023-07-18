<?php

require_once __DIR__ . '/../../config/constants.php';
require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/Ideas.php';
require_once __DIR__ . '/../../models/Languages.php';
SessionFlash::start();


try {
    $error = 0;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $projectDesc = trim(filter_input(INPUT_POST, 'projectDesc', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $languages = trim(filter_input(INPUT_POST, '', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY));

        if(empty($title)){
            $errorTitle = MESSAGES['ERROR_PROJECT_TITLE'];
            $error = 1;
        }else{
            $isOk = filter_var($title,FILTER_DEFAULT);
            if(!$isOk){
                $errorTitle = MESSAGES['ERROR_PROJECT_TITLE'];
                $error = 1;
            }
        }

        // Description du projet 

        if(empty($projectDesc)){
            $errorProjectDesc = MESSAGES['ERROR_PROJECT_DESC'];
            $error = 1;
        }else{
            $isOk = filter_var($projectDesc, FILTER_DEFAULT);
            if(!$isOk){
                $errorDesc = MESSAGES['ERROR_PROJECT_DESC'];
                $error = 1;
            }
        }


        // langages

        // update
        if($error == 0){
            $updateideas = new Ideas;
            $updateideas->set_name($title);
            $updateideas->set_description($projectDesc);
            $response = $updateideas->update($id);

        }
    }
} catch (\Throwable $th) {
    //throw $th;
}


include __DIR__ . '/../../views/templates/header.php';
include __DIR__ . '/../../views/users/updateProject.php';
include __DIR__ . '/../../views/templates/header.php';