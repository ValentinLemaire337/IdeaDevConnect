<?php

require_once __DIR__ . '/../helpers/connect.php';

class User{

    private int $id;
    private string $firstname;
    private string $lastname;
    private string $mail;
    private string $birthdate;
    // private string $image;
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
    public function get_birthdate(){
        return $this->birthdate;
    }
    // public function get_image(){
        // return $this->image;
    // }
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
    public function set_birthdate(string $birthdate){
        $this->birthdate = $birthdate;
    }
    // public function set_image(){
    //     $this->image = $image;
    // }
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

    // méthode d'ajout d'utilisateur dans la BDD

    public static function add(){

    }

    // méthode static pour update le validated_at dans la BDD

    // public static function validate(){
    //     $db = connect();
    //     $sql = 'UPDATE `users` SET `validated_at` = NOW() WHERE `users`.`email` = :email AND `validated_at` IS NULL;';
    //     $sth = $db->prepare($sql);
    //     $sth->bindValue(':email', $email, PDO::PARAM_STR);
    //     // $sth->bindValue(':validated_at', )
    //     $sth->execute();
    //     if($sth->execute()){
    //         return ($sth->rowCount() > 0) ? true : false;
    //     }
    // }
}