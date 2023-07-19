<?php

class Users_Languages{

    private int $users_id;
    private int $languages_id;

    // GETTER

    public function get_users_id(){
        return $this->users_id;
    }
    public function get_languages_id(){
        return $this->languages_id;
    }

    //SETTER

    public function set_users_id(int $users_id){
        $this->users_id = $users_id;
    }
    public function set_languages_id(string $languages_id){
        $this->languages_id = $languages_id;
    }

    // METHODES

    public function add(){
        $db = Database::getInstance();
        $sql = 'INSERT INTO `prefer`(`users_id`, `languages_id`)
                VALUES (:users_id, :languages_id);';
        $sth = $db->prepare($sql);
        $sth->bindValue(':users_id', $this->users_id, PDO::PARAM_INT);
        $sth->bindValue(':languages_id', $this->languages_id, PDO::PARAM_INT);
        return $sth->execute();
    }

    public static function delete(int $users_id){
        $db = Database::getInstance();
        $sql = 'DELETE FROM `prefer` WHERE `users_id` = :id;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':users_id', $users_id, PDO::PARAM_INT);
        // $sth->bindValue(':users_id', $users_id, PDO::PARAM_INT);
        return $sth->execute();

    }
}