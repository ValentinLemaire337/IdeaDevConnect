<?php

require_once __DIR__ . '/../../config/constants.php';
require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/Ideas.php';
require_once __DIR__ . '/../../models/Users.php';
require_once __DIR__ . '/../../models/Teams.php';
require_once __DIR__ . '/../../models/Languages.php';
require_once __DIR__ . '/../../models/Users_Idea.php';
SessionFlash::start();

try {

    $languages = Languages::getAll();
    // var_dump($languages);
    // die;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $error = 0;
        $id = $_SESSION['user']->users_id;
        $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $projectDesc = trim(filter_input(INPUT_POST, 'projectDesc', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $projectLanguages = trim(filter_input(INPUT_POST, 'languages', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        var_dump($name);
        var_dump($projectDesc);
        // $languages = trim(filter_input(INPUT_POST, '', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY));

        // ajout des informations du projet en BDD

        // Titre du projet

        if(empty($name)){
            $errorname = MESSAGES['ERROR_PROJECT_name'];
            $error = 1;
        }else{
            $isOk = filter_var($name,FILTER_DEFAULT);
            if(!$isOk){
                $errorname = MESSAGES['ERROR_PROJECT_name'];
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


        var_dump($error);
        if($error == 0){
            $db = Database::getInstance();
            $db->beginTransaction();
            var_dump('oui');
            $newProject = new Ideas;
            $newProject->set_name($name);
            $newProject->set_description($projectDesc);
            $newProject->set_users_id($id);
            $response = $newProject->add($id);
            var_dump($response);
            // die;

            $lastId = $db->lastInsertId();
            var_dump($lastId);

            $userProject = new Users_Idea;
            $userProject->set_users_id($id);
            $userProject->set_ideas_id($lastId);
            $responseProject = $userProject->add();

            

            if(($response == true) && ($responseProject == true)){
                $db->commit();
                $succes = MESSAGES['SUCCESS_ADD_TEAM'];
            }else{
                $db->rollback();
            }


        }

        
    }
} catch (\Throwable $th) {
    throw $th;
}


include __DIR__ . '/../../views/templates/header.php';
include __DIR__ . '/../../views/forum/addProject.php';
include __DIR__ . '/../../views/templates/footer.php';