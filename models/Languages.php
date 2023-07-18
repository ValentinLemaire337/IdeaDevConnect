<?php

require_once __DIR__ . '/../helpers/connect.php';
class Languages{

    private int $id;
    private string $name;

    // GETTER

    public function get_id(){
        return $this->id;
    }
    public function get_name(){
        return $this->name;
    }

    //SETTER

    public function set_id(int $id){
        $this->id = $id;
    }
    public function set_name(string $name){
        $this->name = $name;
    }

    // METHODES

    public function add(){
        $db = connect();
        $sql = 'INSERT INTO `languages`(`nameLanguage`)
                VALUES (:name);';
        $sth = $db->prepare($sql);
        $sth->bindValue(':name', $this->name);
        $sth->execute();
    }

    public static function getAll(){
        $db = connect();
        $sql = 'SELECT * FROM `languages`;';
        $sth = $db->query($sql);
        return $sth->fetchAll();
    }
}