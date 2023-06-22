<?php


class User{





    // méthode static pour update le validated_at dans la BDD
    
    public static function validate(){
        $db = connect();
        $sql = 'UPDATE `users` SET `validated_at` = NOW() WHERE `users`.`email` = :email AND `validated_at` IS NULL;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':email', $email, PDO::PARAM_STR);
        // $sth->bindValue(':validated_at', )
        $sth->execute();
        if($sth->execute()){
            return ($sth->rowCount() > 0) ? true : false;
        }
    }
}