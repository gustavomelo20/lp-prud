<?php

include_once('db.php');

Class InsertContato extends db{
    
   


    public function contato($nome,$email,$telefone,$mensagem)
    {

        $cliente = 1;
        $lp = 1;

        $db = $this->conect(); 
        $stmt = $db->prepare("INSERT INTO contato (nome, email , telefone,mensagem, id_cliente, id_lp) 
                                                        VALUES 
                                    (:nome, :email, :telefone,:mensagem, :id_cliente, :id_lp)");
        $stmt->bindparam(":nome", $nome);
        $stmt->bindparam(":email", $email);
        $stmt->bindparam(":telefone", $telefone);
        $stmt->bindparam(":mensagem", $mensagem);
        $stmt->bindparam(":id_cliente", $cliente);
        $stmt->bindparam(":id_lp", $lp);
        $stmt->execute();
    }

}



    $nome = $_POST['nome'];
    $email = $_POST['email'];;
    $telefone =  $_POST['telefone'];
    $mensagem = $_POST['mensagem'];


    $lead = new InsertContato();
    $lead->contato($nome,$email,$telefone,$mensagem);