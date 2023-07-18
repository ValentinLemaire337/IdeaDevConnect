<?php 

require_once __DIR__ . '/../helpers/SessionFlash.php';
SessionFlash::start();

define("DSN", 'mysql:host=localhost;dbname=ideadevconnect');
define("USER", 'valentinlemaire');
define("PWD", '5)XCnBIo-1hv_bG@');

define("SECRET_KEY", 'hgtdKuIyiiFydtjr-è_èç_àç)ài654;,;:');

define("ROLE",[
0 => 'Administrateur',
1 => 'Utilisateur',
2 => 'Team Leader',
3 => 'Non-inscrit'
]
);

define('NB_ELEMENTS_BY_PAGE', 10);


define("REGEX_NAME", "^[A-Za-z é'èçàù-]{2,50}$");
define("REGEX_LANGUAGE","^[A-Za-z é'èçàù+#- ]{2,50}$");
define("REGEX_MAIL", "^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$");
define("REGEX_PWD", "^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\W])(?=\S*[\d])\S*$");

define("MESSAGES", [
    'INFO_MESSAGE_USER' =>'Compte utilisateur en attente de validation',
    'SUCCESS_MESSAGE_USER' => 'Compte utilisateur créer',
    'SUCCESS_ADD_LANGUAGE' => 'Ajout d\'un langage réussi',
    'ERROR_MESSAGE_USER' =>'Compte utilisateur introuvable',
    'ERROR_MESSAGE_FIRSTNAME' => 'Prénom invalide',
    'ERROR_MESSAGE_LASTNAME' => 'Nom invalide',
    'ERROR_MESSAGE_MAIL' => 'Mail invalide',
    'ERROR_MESSAGE_PASSWORD' => 'Mot de passe invalide',
    'ERROR_MESSAGE_ACCOUNT' => 'Compte non créer',
    'ERROR_PROJECT_TITLE' => 'Titre de votre projet manquant',
    'ERROR_PROJECT_DESC' => 'Description de votre projet manquante ou incorrecte',
    'ERROR_MESSAGE_MESSAGE' => 'Votre message ne respecte pas blabla',
    'ERROR_TEAM_NAME' => 'nom d\'équipe vide ou contient des caractères non valide',
    'ERROR_ADD_LANGUAGE' => 'Le champ du langage est vide',
    'ERROR_BAD_LANGUAGE' => 'Veuillez utiliser que des caractères valides pour l\'ajout d\'un langage',
    'ERROR_ADD_MESSAGE' => 'L\'ajout en base de donnée de votre langage a échoué',
    'ERROR_UPDATE_MESSAGE' => 'Veuillez remplir le champ manquant',
    'ERROR_UPDATE_MESSAGE_CONTENT' => 'Votre message contient des caractères non valide',
    'ERROR_UPDATE_MESSAGE_DB' => 'Erreur lors de la mise à jour de votre message en base de données',
    'ERROR_UPDATE_TEAMNAME' => 'Veuillez saisir un nom d\'équipe correct',
    'ERROR_UPDATE_TEAM' => 'Erreur lors de la mise à jour de l\'équipe dans la base de données'
]);
