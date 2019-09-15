<?php
require_once 'modelo/cupomModelo.php';
require_once 'servico/validacaoServico.php';
function adicionar(){
    if (ehPost()){
        $nome = $_POST["nome"];
        $desconto = $_POST["desconto"];
        $erros = array();
        
if (nao_vazio($nome, "nome") != NULL) {
            $errors[] = nao_vazio($nome, "nome");
        } 
        if (nao_vazio($desconto, "desconto") != NULL) {
            $errors[] = nao_vazio($desconto, "desconto");
        } 
     
if(count($erros) > 0){
         $dados = array();
         $dados["erros"] = $erros;
         exibir("cupom/cadastro", $dados);
     }else{
         $mensagem = adicionarCupom($nome,$desconto);
        redirecionar("cupom/listar");
     }
    }else{
   exibir("cupom/cadastro");  
     }    
}
function listar(){
    $dados = array();
    $dados["cupons"] = pegarTodosCupom();
    exibir("cupom/listar", $dados);
}
function ver($idcupom){
    $dados["cupom"] = pegarCupomPorId($idcupom);
    exibir("cupom/visualizar", $dados);
}
function deletar($idcupom){
    $msg = deletarCupom($idcupom);
    redirecionar("cupom/listar");
}
function editar($idcupom){
     if (ehPost()){
      $nome = $_POST["nome"];
      $desconto = $_POST["desconto"];
       
       editarCupom($nome,$desconto,$idcupom);
       redirecionar("cupom/listar");
} else{
    $dados["cupom"] = pegarCupomPorId($idcupom);
    exibir("cupom/editar", $dados);
} 
}