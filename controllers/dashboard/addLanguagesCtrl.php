<?php

require_once __DIR__ . '/../../config/constants.php';
require_once __DIR__ . '/../../helpers/connect.php';
require_once __DIR__ . '/../../models/Languages.php';
SessionFlash::start();



try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $error = 0;
        $language = trim(filter_input(INPUT_POST, 'languageName', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        if (empty($language)) {
            $errorLanguage = MESSAGES['ERROR_ADD_LANGUAGE'];
            $error = 1;
        } else {
            $isOk = filter_var($language, FILTER_DEFAULT);
            if (!$isOk) {
                $errorLanguage = MESSAGES['ERROR_BAD_LANGUAGE'];
                $error = 1;
            }

            if ($error == 0) {
                $newLanguages = new Languages;
                $newLanguages->set_name($language);
                $response = $newLanguages->add();

                if ($response) {
                    $successMessage = MESSAGES['SUCCESS_ADD_LANGUAGE'];
                } else {
                    $errorMessage = MESSAGES['ERROR_ADD_MESSAGE'];
                }
            }
        }
    }
} catch (\Throwable $th) {
    //throw $th;
}


include __DIR__ . '/../../views/templates/header.php';
include __DIR__ . '/../../views/users/admin/languages.php';
include __DIR__ . '/../../views/templates/footer.php';
