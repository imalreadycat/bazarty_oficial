<?php
require_once "servico/validacaoServico.php";
require_once "modelo/enderecoModelo.php";
require_once "modelo/clienteModelo.php";

function adicionar($id_cliente){
    if (ehPost()){
        $rua = $_POST["rua"];
        $numero = $_POST["numero"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cidade =$_POST["cidade"];
        $cep = $_POST["cep"];
        
        $erros = array();
        
        if (nao_vazio($rua, "rua") != NULL) {
            $errors[] = nao_vazio($rua, "rua");
        }          
        if (nao_vazio($complemento, "complemento") != NULL) {
            $errors[] = nao_vazio($complemento, "complemento");
        }    
        if (nao_vazio($bairro, "bairro") != NULL) {
            $errors[] = nao_vazio($bairro, "bairro");
        }
        if (nao_vazio($cidade, "cidade") != NULL) {
            $errors[] = nao_vazio($cidade, "cidade");
        }
         if (nao_vazio($cep, "cep") != NULL) {
            $errors[] = nao_vazio($cep, "cep");
        }          
        if(count($erros) > 0){
         $dados = array();
         $dados["erros"] = $erros;
         exibir("endereco/cadastro", $dados);
     }else{
         $mensagem = adicionarEndereco($id_cliente, $rua,$numero,$complemento, $bairro,$cidade,$cep);
         echo $msg;
        redirecionar("cliente/ver/$id_cliente");
     }
    }else{
       
        exibir("endereco/cadastro");  
     }    
}
function listar($id_cliente){
    $dados = array();
    $dados["enderecos"] = pegarEnderecosPorUsuario($id_cliente);
    exibir("endereco/listar", $dados);
}
function ver($idendereco){
    $dados["endereco"] = pegarEnderecoPorId($idendereco);
    exibir("endereco/visualizar", $dados);
}
function deletar($idendereco, $id_cliente){
    $msg = deletarEndereco($idendereco);
    redirecionar("cliente/ver/$id_cliente");
}
function editar($idendereco, $id_cliente){
     if (ehPost()){
      $rua = $_POST["rua"];
      $numero = $_POST["numero"];
      $complemento = $_POST["complemento"];
      $bairro = $_POST["bairro"];
      $cidade = $_POST["cidade"];
      $cep = $_POST["cep"];
        
      editarEndereco($idendereco,$rua,$numero,$complemento, $bairro,$cidade,$cep);
      redirecionar("endereco/listar/$id_cliente");
} else{
    $dados["enderecos"] = pegarEnderecoPorId($idendereco);
    exibir("endereco/editar", $dados);
} 
}


