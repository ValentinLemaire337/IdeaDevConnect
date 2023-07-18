<?php

require_once __DIR__ . '/../helpers/connect.php';

class User{

    private int $id;
    private string $firstname;
    private string $lastname;
    private string $mail;
    // private string $image;
    private int $role;
    private string $password;
    private string $created_at;
    private string $updated_at;
    private string $validated_at;
    private string $deleted_at;


    // GETTER

    public function get_id(){
        return $this->id;
    }
    public function get_firstname(){
        return $this->firstname;
    }
    public function get_lastname(){
        return $this->lastname;
    }
    public function get_mail(){
        return $this->mail;
    }
    // public function get_image(){
        // return $this->image;
    // }  
    public function get_password(){
        return $this->password;
    }
    public function get_role(){
        return $this->role;
    }
    public function get_created_at(){
        return $this->created_at;
    }
    public function get_updated_at(){
        return $this->updated_at;
    }
    public function get_validated_at(){
        return $this->validated_at;
    }
    public function get_deleted_at(){
        return $this->deleted_at;
    }


    // SETTER

    public function set_id(int $id){
        $this->id = $id;
    }
    public function set_firstname(string $firstname){
        $this->firstname = $firstname;
    }
    public function set_lastname(string $lastname){
        $this->lastname = $lastname;
    }
    public function set_mail(string $mail){
        $this->mail = $mail;
    }
    // public function set_image(){
    //     $this->image = $image;
    // }
    public function set_password(string $password){
        $this->password = $password;
    }
    public function set_role(string $role){
        $this->role = $role;
    }
    public function set_created_at(string $created_at){
        $this->created_at = $created_at;
    }
    public function set_updated_at(string $updated_at){
        $this->updated_at = $updated_at;
    }
    public function set_validated_at(string $validated_at){
        $this->validated_at = $validated_at;
    }
    public function set_deleted_at(string $deleted_at){
        $this->deleted_at = $deleted_at;
    }


        // METHODES

    // méthode d'ajout d'utilisateur dans la BDD        !!!! RESTE IMAGE A VOIR DANS UNE AUTRE METHODE !!!!

    public function add(){
        $db = connect();
        $sql = 'INSERT INTO `users` (`firstname`, `lastname`, `mail`, `password`, `role`, `created_at`)
        VALUES (:firstname, :lastname, :mail, :password, 1, NOW());';
        $sth = $db->prepare($sql);
        $sth->bindValue(':lastname', $this->get_lastname(), PDO::PARAM_STR);
        $sth->bindValue(':firstname', $this->get_firstname(), PDO::PARAM_STR);
        $sth->bindValue(':password', $this->get_password(), PDO::PARAM_STR);
        $sth->bindValue(':mail', $this->get_mail(), PDO::PARAM_STR);
        return $sth->execute();
    }


    // méthode de vérification de mail unique en BDD

    public static function isMailExist(string $mail)
    {
        $db = connect();
        $sql = 'SELECT `mail` FROM `users` WHERE `mail`= :mail;';       //:mail = marqueur nom
        $sth = $db->prepare($sql);
        $sth->bindValue(':mail', $mail);
        $sth->execute();
        return $sth->fetch();
    }

    // méthode pour afficher toutes les infos d'un seul user avec les idées qu'ils ont publiées et leurs messages

    public static function get(int $id){
        $db = connect();
        $sql = 'SELECT * FROM `posts`
                RIGHT JOIN `users`
                ON `posts`.`users_id` = `users`.`users_id`
                LEFT JOIN `users_ideas` 
                ON `users_ideas`.`users_id` = `users`.`users_id`
                LEFT JOIN `ideas` 
                ON `users_ideas`.`ideas_id` = `ideas`.`ideas_id`
                WHERE `users`.`users_id` = :id;
                ';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetch();
    }

    public static function getId(int $id){
        $db = connect();
        $sql = 'SELECT * FROM `users` WHERE `users_id` = :id;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetch();
    }

    // méthode pour afficher les équipes que les utilisateurs ont rejoints

    public static function getTeam($id){
        $db = connect();
        $sql = 'SELECT * FROM `users`
                RIGHT JOIN `belong`
                ON `users`.`users_id` = `belong`.`users_id`
                INNER JOIN `teams`
                ON `belong`.`teams_id` = `teams`.`teams_id`
                WHERE `users`.`users_id` = :id;
                ';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id',$id, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetchAll();
    }

    // méthode pour afficher les langages préférés d'un utilisateur

    public static function getLanguages(int $id){
        $db = connect();
        $sql = 'SELECT * 
                FROM `languages`
                RIGHT JOIN `prefer`
                ON `languages`.`languages_id` = `prefer`.`languages_id`
                LEFT JOIN `users`
                ON `prefer`.`users_id` = `users`.`users_id`
                WHERE `users`.`users_id` = :id;
                ';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetch();
        
    }



    public static function getByMail(string $mail){
        $db = connect();
        $sql = 'SELECT * FROM `users` WHERE `mail` = :email;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':email', $mail, PDO::PARAM_STR);
        $sth->execute();
        return $sth->fetch();
    }

    // méthode pour afficher tout les users

    public static function getAll(){
        $db = connect();
        $sql = 'SELECT *
                FROM `users`;';
        $sth = $db->query($sql);
        return $sth->fetchAll();
    }

    //méthode pour update les infos users

    public function update(int $id){
        $db = connect();
        $sql = 'UPDATE `users`
                SET `firstname` = :firstname,
                `lastname` = :lastname,
                `mail` = :mail,
                `updated_at` = NOW()
                WHERE `users_id` = :id;';
        $sth = $db->prepare($sql);
        $sth->bindValue('firstname', $this->firstname, PDO::PARAM_STR);
        $sth->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $sth->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
    }

    //méthode pour update le mot de passe users
    public function updatePassword(int $id){
        $db = connect();
        $sql = 'UPDATE `users`
                SET `password` = :password
                WHERE `users_id` = :id;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':password', $this->password);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        return $sth->execute();
    }


    //méthode pour delete un utilisateur

    public static function delete(int $id){
        $db = connect();
        $sql = 'DELETE FROM `users` WHERE `users_id` = :id;';     // + add date de delete
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
    }

    //méthode static pour update le validated_at dans la BDD    !!!! LORS DE LA RECEPTION DE LA VALIDATION USER !!!

    // public static function validate(){
    //     $db = connect();
    //     $sql = 'UPDATE `users` SET `validated_at` = NOW() WHERE `users`.`email` = :email AND `validated_at` IS NULL;';
    //     $sth = $db->prepare($sql);
    //     $sth->bindValue(':email', $email, PDO::PARAM_STR);
    //     $sth->execute();
    //     if($sth->execute()){
    //         return ($sth->rowCount() > 0) ? true : false;
    //     }
    // }
}