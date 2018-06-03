<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class AdminController extends CI_Controller {
 
   public function ultimosjogos(){
       $this->load->model('AdminModel');
       
       $data['jogos'] = $this->AdminModel->getJogos();
       $this->load->view('gamestats',$data);
   }
   public function paginajogo($id){
    
       $this->load->model('AdminModel');
       $query = $this->AdminModel->getJogoById($id);
       $dados['jogos'] = $query;
       $this->load->view('jogo',$dados);
   }
    
   public function listar(){
       $this->load->model('AdminModel');
       
       $data['jogos'] = $this->AdminModel->getJogos();
       $this->load->view('listajogo',$data);
   }
   
   public function form(){
       $this->load->model('AdminModel');
       
       $this->load->view('Cadastro_jogo');
   }
   
   public function inserir(){
       $this->load->model('AdminModel');
       $dados['titulo'] = $this->input->post('titulo');
       $dados['desenvolvedora'] = $this->input->post('desenvolvedora');
       $dados['plataforma'] = $this->input->post('plataforma');
       $dados['lancamento'] = $this->input->post('lancamento');
       $dados['estilo'] = $this->input->post('estilo');
       $dados['descricao'] = $this->input->post('descricao');
      
       
       if($this->input->post('id')!= NULL){
           
           $this->AdminModel->editarJogo($dados, $this->input->post('id'));
           
       }else{
           
        $this->AdminModel->addJogos($dados);
        
       }
       redirect('https://php-sponton.c9users.io/projeto/index.php/admin/form');
   }
   
   public function editar($id=NULL){
       if($id ==NULL){
           redirect('https://php-sponton.c9users.io/projeto/index.php/admin/form');
       }
       $this->load->model('AdminModel');
       $query = $this->AdminModel->getJogoById($id);
       if($query == NULL){
        redirect('https://php-sponton.c9users.io/projeto/index.php/admin/form');   
       }
       $dados['jogos'] = $query;
       $this->load->view('editajogo',$dados);
       
   }
}