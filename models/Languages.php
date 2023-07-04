<?php

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
}