<?php 


class Users_Idea{

    private int $users_id;
    private int $ideas_id;

    // GETTER

    public function get_users_id(){
        return $this->users_id;
    }
    public function get_ideas_id(){
        return $this->ideas_id;
    }

    // SETTER

    public function set_users_id(int $users_id){
        $this->users_id = $users_id;
    }
    public function set_ideas_id(string $ideas_id){
        $this->ideas_id = $ideas_id;
    }

    // METHODES

    public function add(){
        $db = connect();
        $sql = 'INSERT INTO `users_ideas`(`users_id	`, `ideas_id`)
                VALUES (:users_id, :ideas_id);';
        $sth = $db->prepare($sql);
        $sth->bindValue(':users_id', $this->users_id, PDO::PARAM_INT);
        $sth->bindValue(':ideas_id', $this->ideas_id, PDO::PARAM_INT);
        return $sth->execute();
    }

    public static function delete(int $id){
        $db = connect();
        $sql = 'DELETE FROM `users_ideas` WHERE `users_id` = :id;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
    }
}