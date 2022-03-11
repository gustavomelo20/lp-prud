<?php

include_once('db.php');

Class SelectContato extends db{
    

    public function contato($id)
    {

        $db = $this->conect(); 
        $stmt = $db->prepare("SELECT * FROM contato WHERE id_cliente = :id_cliente ORDER BY id_contato DESC");
        $stmt->bindParam(":id_cliente", $id);
        $stmt->execute();

        return  $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

}


  $leads = new SelectContato();
  $result = $leads->contato(1);



  Class SelectAcessos extends db{
    

    public function acessos($id)
    {

        $data = "'%".date('Y-m')."%'";
        $db = $this->conect(); 
        $stmt = $db->prepare("SELECT COUNT(id_acesso) AS resultado FROM acesso WHERE id_cliente = :id_cliente AND data_acesso LIKE $data");
        $stmt->bindParam(":id_cliente", $id);
        $stmt->execute();

        return  $stmt->fetch(\PDO::FETCH_ASSOC);
    }

}

    $acesso = new SelectAcessos();
    $resultAcesso = $acesso->acessos(1);
