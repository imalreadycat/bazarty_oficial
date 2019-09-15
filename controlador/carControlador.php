<?php
require_once "modelo/produtoModelo.php";
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