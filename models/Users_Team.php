<?php

class Users_Team{

    private int $users_id;
    private int $teams_id;

    // GETTER

    public function get_users_id(){
        return $this->users_id;
    }
    public function get_teams_id(){
        return $this->teams_id;
    }

    //SETTER

    public function set_users_id(int $users_id){
        $this->users_id = $users_id;
    }
    public function set_teams_id(string $teams_id){
        $this->teams_id = $teams_id;
    }

    // METHODES

    public function add(){
        $db = Database::getInstance();
        $sql = 'INSERT INTO `belong`(`users_id`,`teams_id`)
                VALUES (:users_id, :teams_id);';
        $sth = $db->prepare($sql);
        $sth->bindValue(':users_id', $this->users_id, PDO::PARAM_INT);
        $sth->bindValue(':teams_id', $this->teams_id, PDO::PARAM_INT);
        return $sth->execute();
    }

    public static function delete(int $id){
        $db = Database::getInstance();
        $sql = 'DELETE FROM `belong` WHERE `users_id` = :id;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
    }
}