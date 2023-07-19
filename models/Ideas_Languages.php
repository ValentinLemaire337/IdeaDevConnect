<?php

class IdeasLanguages{

    private int $ideas_id;
    private int $languages_id;

    // GETTER

    public function get_ideas_id(){
        return $this->ideas_id;
    }
    public function get_languages_id(){
        return $this->languages_id;
    }

    //SETTER

    public function set_ideas_id(int $ideas_id){
        $this->ideas_id = $ideas_id;
    }
    public function set_languages_id(string $languages_id){
        $this->languages_id = $languages_id;
    }

    // METHODES

    public function add(){
        $db = Database::getInstance();
        $sql = 'INSERT INTO `developped`(`ideas_id`, `languages_id`)
                VALUES (:ideas_id, :languages_id);';
        $sth = $db->prepare($sql);
        $sth->bindValue(':ideas_id', $this->ideas_id, PDO::PARAM_INT);
        $sth->bindValue(':ideas_id', $this->languages_id, PDO::PARAM_INT);
        return $sth->execute();
    }

    public function delete(int $ideas_id, int $languages_id){
        $db = Database::getInstance();
        $sql = 'DELETE FROM `developped` WHERE `ideas_id` = :id;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $this->ideas_id, PDO::PARAM_INT);
        return $sth->execute();
    }
}