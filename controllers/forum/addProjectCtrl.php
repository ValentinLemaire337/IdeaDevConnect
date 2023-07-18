<?php


require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/Ideas.php';
require_once __DIR__ . '/../../models/Users.php';
require_once __DIR__ . '/../../models/Teams.php';


try {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $error = 0;
        $id = filter_var(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
        $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $projectDesc = trim(filter_input(INPUT_POST, 'projectDesc', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        var_dump($title);
        var_dump($projectDesc);
        // $languages = trim(filter_input(INPUT_POST, '', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY));

        // ajout des informations du projet en BDD

        // Titre du projet

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

        // Selection des langages du projet
        

        // image d'illustration du projet
        var_dump($error);
        if($error == 0){
            // var_dump('oui');
            $newProject = new Ideas;
            $newProject->set_name($title);
            $newProject->set_description($projectDesc);
            $newProject->set_users_id($id);
            $response = $newProject->add($id);
            var_dump($response);
        }

        
    }
} catch (\Throwable $th) {
    //throw $th;
}


include __DIR__ . '/../../views/templates/header.php';
include __DIR__ . '/../../views/forum/addProject.php';
include __DIR__ . '/../../views/templates/footer.php';