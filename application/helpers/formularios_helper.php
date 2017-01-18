<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('form_dropdown_aulas')) {

    /*
      $nome = é o atributo name do elemento select no form html gerado
      $setores = é o array com todos os setores cadastrados e que o usuário irá selecionar (geralmente vem do bd)
      $idSetor = é quando um item é exibido selecionado no select
      $extra = informações extras para o elemento html (id, js, class, etc)
     
      Para montar o select na view, chame form_dropdown_setores('txtSetor', $setores, set_value('txtSetor'), array('id' => 'txtSetor', 'onChange' => 'funcao_js();'));
     
    */

    function form_dropdown_setores($nome = 'txtSetor', $setores = [], $idSetor = NULL, $extra = '') {

        if (count($setores) > 0) {
            $arraySetores[] = "Escolha uma opção";
            foreach ($setores as $s) {
                $arraySetores[$s->id] = $s->nome_setor;
            }
        } else {
            $arraySetores[''] = 'Nenhum registro encontrado.';
        }

        return form_dropdown($nome, $arraySetores, $idSetor, $extra);
    }

}

