<?php
    class Denuncia extends Model{

        public function getQtdeDenuncia(){
            $sql = "SELECT COUNT(*) as u FROM usuario";
            $sql = $this->db->query($sql); //$this é pra ter acesso ao db do model que está exetendido
            
            if($sql->rowCount() > 0){
                $sql = $sql->fetch();
                return $sql['u'];
            }else{
                return 0;

            } 
        } 
    }



?>