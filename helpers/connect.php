<?php 

require_once __DIR__ .'/../config/constants.php';  

function connect(){
    $db = new PDO(DSN, USER, PWD);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $db;
}  