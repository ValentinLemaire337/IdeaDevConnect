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
        
    }
}