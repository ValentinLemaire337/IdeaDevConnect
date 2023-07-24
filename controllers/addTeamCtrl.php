<?php

require_once __DIR__ . '/../config/constants.php';
require_once __DIR__ . '/../helpers/connect.php';
require_once __DIR__ . '/../models/Teams.php';
require_once __DIR__ . '/../models/Users_Team.php';
SessionFlash::start();


try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $error = 0;
        $teamName = trim(filter_input(INPUT_POST, 'teamName', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $description = trim(filter_input(INPUT_POST, 'teamDescription', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $id = $_SESSION['user']->users_id;
        // var_dump($teamName);
        // var_dump($description);

        if (empty($teamName)) {
            $errorTeamName = MESSAGES['ERROR_TEAM_NAME'];
            // var_dump('nom vide');
            $error = 1;
        } else {
            $isOk = filter_var($teamName, FILTER_DEFAULT);
            if (!$isOk) {
                $errorTeamName = MESSAGES['ERROR_TEAM_NAME'];
                $error = 1;
                // var_dump('nom incorrect');
            }
        }

        if (empty($description)) {
            $errorTeamDesc = MESSAGES['ERROR_TEAM_DESC'];
            $error = 1;
        } else {
            $isOk = filter_var($description, FILTER_DEFAULT);
            if (!$isOk) {
                $errorTeamDesc = MESSAGES['ERROR_TEAM_DESC'];
                $error = 1;
            }
        }
        // var_dump($error);

        if ($error == 0) {
            $db = Database::getInstance();
            $db->beginTransaction();
            $newTeam = new Teams;
            $newTeam->set_teamName($teamName);
            $newTeam->set_description($description);
            $response = $newTeam->add();
            // var_dump($response);
            // var_dump('oui');

            $lastId = $db->lastInsertId();
            // var_dump($lastId);

            $teamOwner = new Users_Team;
            $teamOwner->set_users_id($id);
            $teamOwner->set_teams_id($lastId);
            $responseOwner = $teamOwner->add();

            if(($response == true) && ($responseOwner == true)){
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


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/users/teams/addTeam.php';
include __DIR__ . '/../views/templates/footer.php';
