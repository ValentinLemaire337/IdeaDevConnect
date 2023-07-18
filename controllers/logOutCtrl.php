<?php 


require_once __DIR__ .'/../config/constants.php';
SessionFlash::start();
session_destroy();
header('location: /controllers/homeCtrl.php');