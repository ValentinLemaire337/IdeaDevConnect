<?php

require_once __DIR__ .'/../config/constants.php';
SessionFlash::start();



    include __DIR__ . '/../views/templates/header.php';
        include __DIR__ . '/../views/home.php';
    include __DIR__ . '/../views/templates/footer.php';