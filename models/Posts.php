<?php

require_once __DIR__ . '/../helpers/connect.php';

class Posts{

    private int $id;
    private string $post;
    private string $created_at;
    private string $validated_at;
    private string $updated_at;
    private string $deleted_at;

    //GETTER

    public function get_id(){
        return $this->id;
    }
    public function get_post(){
        return $this->post;
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
    public function set_post(string $post){
        $this->post = $post;
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

    public function add(){
        $db = connect();
        $sql = 'INSERT INTO `posts`(`post`, `created_at`)
                VALUES (:post, NOW());';
        $sth = $db->prepare($sql);
        $sth->bindValue(':post', $this->post);
        return $sth->execute();
    }

    public static function get(int $id){
        $db = connect();
        $sql = 'SELECT * FROM `posts` WHERE `id` = :id;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetch();
    }

    public static function getAll(){
        $db = connect();
        $sql = 'SELECT * FROM `posts`;';
        $sth = $db->query($sql);
        return $sth->fetchAll();
    }

    
    public static function getAllById(int $id){
        $db = connect();
        $sql = 'SELECT *
                FROM `posts`
                WHERE `users_id` = :id;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        return $sth->execute();
    }

    public function update(int $id){
        $db = connect();
        $sql = 'UPDATE `posts`
                SET `post` = :post,
                `updated_at` = NOW()
                WHERE `id` = :id';
        $sth = $db->prepare($sql);
        $sth->bindValue(':post', $this->post);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        return $sth->execute();
    }

    public function delete(int $id){
        $db = connect();
        $sql = 'DELETE FROM `teams` WHERE `posts_id` = :id;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        return $sth->execute();
    }
} 