<?php
    class Usuario extends Model{

    public function getUsuario(){
        $sql = "SELECT email as e FROM usuario";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
           $sql = $sql->fetch();
             return $sql['e'];
        }else{
             return 0;
        }
    }
  
    public function getSenha(){
        $sql = "SELECT senha as s FROM usuario";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $sql = $sql->fetch();
            return $sql['s'];
         }else{
            return 0;
        }
    }

    public function getAll(){
        $sql = "SELECT * FROM usuario";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $sqlAll = $sql->fetchAll();
            return $sqlAll;
        }else{
            return 0;
        }
    }
}
?>