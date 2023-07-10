<?php

require_once __DIR__ . '/../helpers/connect.php';
require_once __DIR__ . '/../models/Teams.php';


try {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $error = 0;
        $teamName = trim(filter_input(INPUT_POST, 'teamName', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        var_dump($teamName);

        if(empty($teamName)){
            $errorTeamName = MESSAGES['ERROR_TEAM_NAME'];
            var_dump('nom vide');
            $error = 1;
        }else{
            $isOk = filter_var($teamName,FILTER_DEFAULT);
            if(!$isOk){
                $errorTeamName = MESSAGES['ERROR_TEAM_NAME'];
                $error = 1;
                var_dump('nom incorrect');
            }
            var_dump($error);
            if($error == 0){
                $newTeam = new Teams;
                $newTeam->set_teamName($teamName);
                $response = $newTeam->add();
                var_dump($response);
                var_dump('allo');
            }
        }
    }
} catch (\Throwable $th) {
    //throw $th;
}


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/users/teams/addTeam.php';
include __DIR__ . '/../views/templates/footer.php';