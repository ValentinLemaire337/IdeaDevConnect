<?php 

class Team{
    
    private int $id;
    private string $teamName;
    private string $created_at;


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


    // METHODES

    // Ajout d'une équipe en BDD

    public function add()
    {
        $db = connect();
        $sql = 'INSERT INTO `teams` (`teamName`)
            VALUES :teamName,';
        $sth = $db->prepare($sql);
        $sth->bindValue(':lastname', $this->teamName);
        return $sth->execute();
    }

}