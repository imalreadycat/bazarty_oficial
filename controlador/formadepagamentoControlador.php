<?php
require_once 'modelo/formadepagamentoModelo.php';
require_once 'servico/validacaoServico.php';
function adicionar(){
    if (ehPost()) {
       $descricao = $_POST["descricao"];       
       $errors = array();
       
        if (nao_vazio($descricao, "descricao") != NULL) {
            $errors[] = nao_vazio($descricao, "descricao");
        }     
          if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("formadepagamento/formulario", $dados);
        } else {
            $msg = adicionarFormadePagamento($descricao);
            redirecionar("formadepagamento/listarFormasDePagamento");   
         }
    }else{
        exibir('formadepagamento/formulario');
    }
}
function listarFormasDePagamento(){
    $dados = array();
    $dados["formasdepagamento"] = pegarTodasFormasDePagamento();
    exibir("formadepagamento/listar", $dados);
}
function ver($cod_formadepagamento){
    $dados["formadepagamento"] = pegarFormaDePagamentoPorId($cod_formadepagamento);
    exibir("formadepagamento/visualizar", $dados);
}
function deletar($cod_formadepagamento){
    $msg = deletarFormaDePagamento($cod_formadepagamento);
    redirecionar("formadepagamento/listarFormasDePagamento");
}
function editar($cod_formadepagamento){
     if (ehPost()){
       $descricao = $_POST["descricao"];
       
       editarFormaDePagamento($cod_formadepagamento,$descricao);
       redirecionar("formadepagamento/listarFormasDePagamento");
} else{
    $dados["formadepagamento"] = pegarFormaDePagamentoPorId($cod_formadepagamento);
    exibir("formadepagamento/editar", $dados);
} 
}