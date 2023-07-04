<?php 

class Ideas{

    private int $id;
    private string $name;
    private string $description;
    // private string $image;
    private string $created_at;
    private string $updated_at;
    private string $validated_at;
    private string $deleted_at;

     // GETTER

     public function get_id(){
        return $this->id;
    }
    public function get_name(){
        return $this->name;
    }
    public function get_description(){
        return $this->description;
    }
    // public function get_image(){
    //     return $this->image;
    // }
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
    public function set_name(string $name){
        $this->name = $name;
    }
    public function set_description(int $description){
        $this->description = $description;
    }
    // public function set_image(string $image){
    //     $this->image = $image;
    // }
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

    public function add(){
        $db = connect();
        $sql = 'INSERT INTO `ideas`(`name`,`description`, `image`, `created_at`)
                VALUES (:name, :description, :image, NOW());';
        $sth = $db->prepare($sql);
        $sth->bindValue(':name', $this->name);
        $sth->bindValue(':description', $this->description);
        // $sth->bindValue(':image', $this->image);
        return $sth->execute();
    }

    public static function get(int $id){
        $db = connect();
        $sql = 'SELECT * FROM `ideas` WHERE `id` = :id;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetch();
    }

    public function getAll(){
        $db = connect();
        $sql = 'SELECT `name`, `description`, `image`, `created_at`
                FROM `ideas`;';
        $sth = $db->query($sql);
        return $sth->fetchAll();
    }


}