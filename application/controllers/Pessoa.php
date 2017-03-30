<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pessoa extends CI_Controller {

    public function __construct() {
      parent::__construct();

      $this->load->helper(['formularios', 'validacoes']);
      $this->load->model(['Pessoa_model']);
    }

    public function listar(){

    }

    public function cadastrar(){

    }

    public function ver($idPessoa = NULL){
      if(is_null($idPessoa)){
        echo 'pessoa não encontrada';
      }

      $rs = $this->Pessoa_model->getPessoa($idPessoa);
    }


    public function editar($idPessoa = NULL){
      if(is_null($idPessoa)){
        echo 'pessoa não encontrada';
      }

      $rs = $this->Pessoa_model->getPessoa($idPessoa);
    }

    public function excluir($idPessoa = NULL){
      if(is_null($idPessoa)){
        echo 'pessoa não encontrada';
      }

      $rs = $this->Pessoa_model->delete($idPessoa);

      if($rs === TRUE){
        echo 'excluído com sucesso'
      }else{
        echo 'não foi possível excluir!';
      }
    }
}
