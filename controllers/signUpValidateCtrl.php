<?php



require_once __DIR__ . '/../config/constants.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ .'/../helpers/JWT.php';


$jwt = filter_input(INPUT_GET, 'jwt',);

$user = JWT::get($jwt);
if($user){
    // if($isValidated == true){
    //     SessionFlash::setMessage(MESSAGES["INFO_USER_VALIDATED"], SUCCESS);
    // }else{
    //     SessionFlash::setMessage(MESSAGES["ERROR_USER_VALIDATED"], ERROR);
    // }
}else{
    // SessionFlash::setMessage(MESSAGES["ERROR_USER_VALIDATED"], ERROR);
}


// $isValidated = User::validate('email@mail.com');



// var_dump($isValidated);



// VUES

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/users/signUpValidate.php';
include __DIR__ . '/../views/templates/footer.php';
