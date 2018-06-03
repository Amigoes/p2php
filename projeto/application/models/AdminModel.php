<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model{
    
    public function getJogos(){
        $query = $this->db->get('Cadastro_jogo');
        return $query->result();
    }
    public function addJogos($dados){
        if($dados != NULL){
            $this->db->insert('Cadastro_jogo',$dados);
        }
    }
    public function getJogoById($id){
        if($id !=NULL){
            $this->db->where('id',$id);
            $this->db->limit(1);
            $query = $this->db->get('Cadastro_jogo');
            return $query->row();
        }
    }
    public function editarJogo($dados=NULL, $id=NULL){
        if($dados!= NULL && $id != NULL){
            $this->db->update('Cadastro_jogo', $dados, array('id'=>$id));
        }
    }
}

?>