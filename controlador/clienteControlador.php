<?php
require_once "servico/validacaoServico.php";
require_once "modelo/clienteModelo.php";
require_once "modelo/enderecoModelo.php";
require_once "modelo/finalizaModelo.php";
require_once "./biblioteca/acesso.php";


/** anon */
function cadastro (){
    if(ehPost()){
        $nome = $_POST['nomec'];
        $cpf = $_POST['cpf'];
        $sexo = $_POST['sexc'];
        $aniversario = $_POST['dataNc'];
        $email = $_POST['emailc'];
        $senha = $_POST['senhac'];
        $tipo = $_POST['tipoc']; 
        
        $errors = array();
        if (nao_vazio($nome, "nome") != NULL) {
            $errors[] = nao_vazio($nome, "nome");
        }
          if (nao_vazio($cpf, "cpf") != NULL) {
            $errors[] = nao_vazio($cpf, "cpf");
        }
        
        if (nao_vazio($sexo, "sexo") != NULL) {
            $errors[] = nao_vazio($sexo, "sexo");
        }
        if (nao_vazio($aniversario, "aniversario") != NULL) {
            $errors[] = nao_vazio($aniversario, "aniversario");
        }
        if (validando_email($email, "email") != NULL) {
            $errors[] = validando_email($email, "email");
        }
        if (nao_vazio($senha, "senha") != NULL) {
            $errors[] = nao_vazio($senha, "senha");
        }
        if (nao_vazio($tipo, "tipo") != NULL) {
            $errors[] = nao_vazio($tipo, "tipo");
        }
        
                
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("cliente/cadastro", $dados);
        } else {
            $msg = adicionarCliente($nome,$cpf, $sexo, $aniversario, $email,  $senha, $tipo);
            echo $msg;
            redirecionar("produto/listar");
     
        }    
    }else{
        exibir('cliente/cadastro');
    }
}
/** Adm */
function listar(){
    $dados = array();
    $dados["clientes"] = seleciona_todos_os_clientes();
    exibir('cliente/listar', $dados);
}
/** Cli */
function ver($cod){
    $dados["clientes"] = MostrarClientePorCodigo($cod);
    $dados["enderecos"] =  pegarEnderecosPorUsuario($cod);
    exibir('cliente/visualizar', $dados);
}
/** Adm */
function deletar($idCliente) {
    deletarCliente($idCliente);
    redirecionar("cliente/listar");
}
/** Cli */
function editar ($cod){
    if(ehPost()){
        $nome = $_POST['nomec'];
        $cpf = $_POST['cpf'];
        $sexo = $_POST['sexc'];
        $aniversario = $_POST['dataNc'];
        $email = $_POST['emailc'];
        $senha = $_POST['senhac'];
        $tipo = $_POST['tipoc']; 
        EditarClientePorCodigo($nome, $cpf,$sexo, $aniversario, $email,  $senha, $tipo, $cod);
        redirecionar("cliente/listar");
    }else{
        $dados["clientes"] = MostrarClientePorCodigo($cod);
        exibir('cliente/editar', $dados);
        
    }
    
}

function MeuPedido(){
  $id_cliente=acessoPegarUsuarioLogado();
  $dados["pedidos"]=PedidosDoCliente($id_cliente);   
  exibir('cliente/pedidos', $dados);

}

