<?php 

require_once __DIR__ . '/../helpers/connect.php';

class Teams{
    
    private int $id;
    private string $teamName;
    private string $created_at;
    private string $validated_at;
    private string $updated_at;
    private string $deleted_at;


    // GETTER

    public function get_id(){
        return $this->id;
    }
    public function get_teamName(){
        return $this->teamName;
    }
    public function get_created_at(){
        return $this->created_at;
    }
    public function get_validated_at(){
        return $this->validated_at;
    }
    public function get_updated_at(){
        return $this->updated_at;
    }
    public function get_deleted_at(){
        return $this->deleted_at;
    }


    // SETTER

    public function set_id(int $id){
        $this->id = $id;
    }
    public function set_teamName(string $teamName){
        $this->teamName = $teamName;
    }
    public function set_created_at(string $created_at){
        $this->created_at = $created_at;
    }
    public function set_validated_at(string $validated_at){
        $this->validated_at = $validated_at;
    }
    public function set_updated_at(string $updated_at){
        $this->updated_at = $updated_at;
    }
    public function set_deleted_at(string $deleted_at){
        $this->deleted_at = $deleted_at;
    }


    // METHODES

    // Ajout d'une équipe en BDD

    public function add()
    {
        $db = connect();
        $sql = 'INSERT INTO `teams` (`teamName`, `created_at`)
            VALUES (:teamName, NOW())';
        $sth = $db->prepare($sql);
        $sth->bindValue(':teamName', $this->teamName);
        return $sth->execute();
    }

    public function isNameExist(){
        $db = connect();
        $sql = 'SELECT `teamName` FROM `teams` WHERE `teamName` = :teamName;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':teamName', $this->teamName);
        $sth->execute();
        return $sth->fetch();
    }

    public static function getAll(){
        $db = connect();
        $sql = 'SELECT * FROM `teams`;';
        $sth = $db->query($sql);
        return $sth->fetchAll();
    }

    public static function get(int $id):mixed{
        $db = connect();
        $sql = 'SELECT * FROM `teams` WHERE `id` = :id;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetch();
    }

    public function update(int $id){
        $db = connect();
        $sql = 'UPDATE `teams`
                SET `teamName` = :teamName,
                `updated_at` = NOW()
                WHERE = `id` = :id;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
    }

    public function delete(int $id){
        $db = connect();
        $sql = 'DELETE FROM `teams` WHERE `id` = :id;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
    }

    


}