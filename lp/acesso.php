<?php

include_once('db.php');

Class InsertAcesso extends db{
    
    public function acesso()
    {

        $cliente = 1;
        $lp = 1;
        $data = date('Y-m-d');

        $db = $this->conect(); 
        $stmt = $db->prepare("INSERT INTO acesso (id_cliente, id_lp, data_acesso) 
                                                        VALUES 
                                             ( :id_cliente, :id_lp, :data_acesso)");

        $stmt->bindparam(":id_cliente", $cliente);
        $stmt->bindparam(":id_lp", $lp);
        $stmt->bindparam(":data_acesso", $data);
        $stmt->execute();
    }

}

    $acesso = new InsertAcesso();
    $acesso->acesso();