<?php
require_once "modelo/categoriaModelo.php";
require_once "servico/validacaoServico.php";
/** Adm */
function inserir(){
    if (ehPost()) {
       $Nome = $_POST["Nome"];
       
       $errors = array();
        if (nao_vazio($Nome, "Nome") != NULL) {
            $errors[] = nao_vazio($Nome, "Nome");
        }
        
        
        
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("categorias/cadastrar", $dados);
        } else {
            $msg = adicionarCategoria($Nome);
            echo $msg;
             
     
        }    
    }else{
        exibir('categorias/cadastrar');
    }
}
        
        
      
function listar(){
    $dados = array();
    $dados["categorias"] = seleciona_todas_as_categorias();
    exibir('categorias/listar', $dados);
}
function ver($cod){
    $dados["categorias"] = MostrarCategoriaPorCodigo($cod);
    exibir('categorias/visualizar', $dados);
}
function deletar($cod) {
    deletarCategoria($cod);
    redirecionar("categoria/listar");
}
function editar ($cod){
   if (ehPost()) {
       $Nome = $_POST["Nome"];
        EditarCategoriaPorCodigo($Nome, $cod);
       redirecionar("categoria/listar");
    }else{
        $dados["categorias"] = MostrarCategoriaPorCodigo($cod);        
        exibir('categorias/editar', $dados);
        
    }
    
}