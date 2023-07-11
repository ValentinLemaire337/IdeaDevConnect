<?php

require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/Teams.php';

try {
    $error = 0;
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(empty($name)){
        $error = 1;
        $errorUpdateName = MESSAGES['ERROR_UPDATE_TEAMNAME'];
    }else{
        $isOk = filter_var($name, FILTER_DEFAULT);
        if(!$isOk){
            $error = 1;
            $errorName = MESSAGES['ERROR_UPDATE_TEAMNAME'];
        }
    }

    if($error ==0){
        $updateTeam = new Teams;
        $updateTeam->set_teamName($name);
        $updateTeam = $updateTeam->update($id);
        if(!$updateTeam){
            $errorUpdateTeam = MESSAGES['ERROR_UPDATE_TEAM'];
        }
    }
} catch (\Throwable $th) {
    //throw $th;
}



include __DIR__ . '/../../views/templates/header.php';
include __DIR__ . '/../../views/users//teams/updateTeam.php';
include __DIR__ . '/../../views/templates/footer.php';