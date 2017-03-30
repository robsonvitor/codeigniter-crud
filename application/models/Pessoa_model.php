<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pessoa_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getPessoa($idPessoa = NULL){
      $this->db->select('*');
      $this->db->from('pessoa');

      if(!is_null($idPessoa)){
          $this->db->where('id', $idPessoa);
      }

      $rs = $this->db->get()->result();

      if($rs){
        return $rs;
      }else{
        return FALSE;
      }
    }

    public function setPessoa($dados = NULL){
      if(is_null($dados)){
        return FALSE;
      }

      if(isset($dados['id']) && !empty($dados['id'])){
        $this->db->where('id', $dados['id'])
         $rs = $this->db->update('pessoa', $dados);
      }else{
        $rs = $this->db->insert('pessoa', $dados);
      }

      if($rs){
        return TRUE;
      }else{
        return FALSE;
      }

    }

    public function delete($idPessoa = NULL){
      if(is_null($idPessoa)){
        return FALSE;
      }

      $rs = $this->db->delete('pessoa', array('id' => $idPessoa));

      if($rs){
        return TRUE;
      }else{
        return FALSE;
      }
    }
}
