<?php

require_once __DIR__ . '/../helpers/connect.php';
require_once __DIR__ . '/../models/Teams.php';


try {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $error = 0;
        $teamName = trim(filter_input(INPUT_POST, 'teamName', FILTER_SANITIZE_FULL_SPECIAL_CHARS));

        if(empty($teamName)){
            $errorTeamName = MESSAGES['ERROR_TEAM_NAME'];
            $error = 1;
        }else{
            $isOk = filter_var($teamName,FILTER_DEFAULT);
            if(!$isOk){
                $errorTeamName = MESSAGES['ERROR_TEAM_NAME'];
                $error = 1;
            }
        }

        if($error == 0){
            $newTeam = new Teams;
            $newTeam->set_teamName($teamName);
            $response = $newTeam->add();
        }
    }
} catch (\Throwable $th) {
    //throw $th;
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/addTeam.php';
include __DIR__ . '/../views/templates/footer.php';