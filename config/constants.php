<?php 

define("DSN", 'mysql:host=localhost;dbname=ideadevconnect');
define("USER", 'valentinlemaire');
define("PWD", '5)XCnBIo-1hv_bG@');

define("SECRET_KEY", 'hgtdKuIyiiFydtjr-è_èç_àç)ài654;,;:');

define("ROLE",[
0 => 'Administrateur',
1 => 'Utilisateur',
2 => 'Team Leader'
]
);


define("REGEX_NAME", "^[A-Za-z é'èçàù-]{2,50}$");
define("REGEX_MAIL", "^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$");
define("REGEX_PWD", "^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\W])(?=\S*[\d])\S*$");

define("MESSAGES", [
    'INFO_MESSAGE_USER' =>'Compte utilisateur en attente de validation',
    'SUCCESS_MESSAGE_USER' =>'Compte utilisateur créer',
    'ERROR_MESSAGE_USER' =>'Compte utilisateur introuvable',

]);
