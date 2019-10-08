<?php
require_once "modelo/produtoModelo.php";
require_once "modelo/cupomModelo.php";
require_once 'modelo/clienteModelo.php';
require_once 'modelo/usuarioModelo.php';
require_once 'modelo/enderecoModelo.php';
require_once 'modelo/formadepagamentoModelo.php';
require_once "./biblioteca/acesso.php";

/** anon */
function mostrar() {
    $total = 0;
    $todos = array();
    if(isset($_SESSION["carrinho"])) {
        $produtos = $_SESSION["carrinho"];
        foreach ($produtos as $produto):
            $prod =  MostrarProdutoPorCodigo($produto);
            $todos[] = $prod;
            $total += $prod["preco"];
        endforeach;
    } else {
        echo "Carrinho vazio!";
    }
    
   $dados = array();
   
   $dados["produto"] = $todos;
   $dados["total"] = $total;
   
  
   //print_r($dados);
    exibir('carrinho/mostrar', $dados);
}

/** anon */
function remover($id_produto){
    $i = 0;
    $vetor = $_SESSION["carrinho"];
    print_r($_SESSION["carrinho"]);
    for($i; $i <= count($vetor); $i++){
        if($vetor[$i] == $id_produto){
           unset ($_SESSION["carrinho"][$i]);
           sort($_SESSION["carrinho"]);
        }
    }
    redirecionar('car/mostrar');
}

/** Cli */
function finalizar(){
   
   if(ehPost()){
       $nome = $_POST["nomec"];
       $desconto = pegardescontoPorNome($nome);
       $desconto = $desconto['desconto']/100;
       echo $desconto;
       $total = 0;
    
   if(isset($_SESSION["carrinho"])) {
        $produtos = $_SESSION["carrinho"];
        foreach ($produtos as $produto):
            $prod =  MostrarProdutoPorCodigo($produto);
            $todos[] = $prod;
            $total += $prod["preco"];
        endforeach;
    } else {
        echo "Carrinho vazio!";
    }
   
    $id_cliente = acessoPegarUsuarioLogado();
   
    $dados = array();
   
   $dados["produto"] = $todos;
   $dados["total"] = number_format($total - ($total * $desconto),2); 
   $dados['cliente'] = MostrarClientePorCodigo($id_cliente);
   $dados['enderecos'] = pegarEnderecosPorUsuario($id_cliente);
   $dados['formapg'] = pegarTodasFormasDePagamento();
   
   exibir('finalizar/finalizar', $dados);
   }else{
       $total = 0;
    
   if(isset($_SESSION["carrinho"])) {
        $produtos = $_SESSION["carrinho"];
        foreach ($produtos as $produto):
            $prod =  MostrarProdutoPorCodigo($produto);
            $todos[] = $prod;
            $total += $prod["preco"];
        endforeach;
    } else {
        echo "Carrinho vazio!";
    }
   
    $id_cliente = acessoPegarUsuarioLogado();
   $dados = array();
   
   $dados["produto"] = $todos;
   $dados["total"] = $total; 
   $dados['cliente'] = MostrarClientePorCodigo($id_cliente);
   $dados['enderecos'] = pegarEnderecosPorUsuario($id_cliente);
   $dados['formapg'] = pegarTodasFormasDePagamento();
   
   exibir('finalizar/finalizar', $dados);
   }
   
}