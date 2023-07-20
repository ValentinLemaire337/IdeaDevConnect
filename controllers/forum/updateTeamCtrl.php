<?php

require_once __DIR__ . '/../../config/constants.php';
require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/Teams.php';
SessionFlash::start();

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $error = 0;
        $id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
        $name = filter_input(INPUT_POST, 'teamName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $description = trim(filter_input(INPUT_POST, 'teamDescription', FILTER_SANITIZE_FULL_SPECIAL_CHARS));

        if (empty($name)) {
            $error = 1;
            $errorUpdateName = MESSAGES['ERROR_UPDATE_TEAMNAME'];
            var_dump('non valide');
        } else {
            $isOk = filter_var($name, FILTER_DEFAULT);
            if (!$isOk) {
                $error = 1;
                $errorName = MESSAGES['ERROR_UPDATE_TEAMNAME'];
                
            }
        }

        $isOk = filter_var($description, FILTER_DEFAULT);
        if(!$isOk){
            $error = 1;
            $errorDescription = MESSAGES['ERROR_TEAM_UPDATE_DESCRIPTION'];
        }

        // var_dump($error);
        if ($error == 0) {
            $updateTeam = new Teams;
            $updateTeam->set_teamName($name);
            $updateTeam->set_description($description);
        }
    }
} catch (\Throwable $th) {
    throw $th;
}



include __DIR__ . '/../../views/templates/header.php';
include __DIR__ . '/../../views/users/teams/updateTeam.php';
include __DIR__ . '/../../views/templates/footer.php';
