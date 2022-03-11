<?php

include_once('db.php');

Class usuario extends db{
    

    public function login($email,$senha)
    {

      
        $db = $this->conect(); 
        $stmt = $db->prepare("SELECT * FROM cliente WHERE email = :email AND senha = :senha ");
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);
        $stmt->execute();

        return  $stmt->fetch(\PDO::FETCH_ASSOC);
    }

}