<?php
require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";
require_once "servico/validacaoServico.php";
require_once "servico/uploadServico.php";

/** anon */
function index() {
    redirecionar("produto/listar");
}
function adicionar() {
    if (ehPost()) {
        $nome = $_POST["NomeProduto"];
        $CategoriaProduto = $_POST["CategoriaProduto"];
        $DescriProduto = $_POST["DescriProduto"];
        $temp_imagem = $_FILES['imagem']['tmp_name'];
        $name_imagem = $_FILES['imagem']['name'];
        $imagem = upload($temp_imagem,$name_imagem);
        echo "<img src='$imagem'>";
        $PreProduto = $_POST["PreProduto"];
        $estoqueMin = $_POST["eMin"];
        $estoqueMax = $_POST["eMax"];
        $quantidade= $_POST["quantidade"];
        $errors = array();
        
         if (nao_vazio($nome, "nome") != NULL) {
            $errors[] = nao_vazio($nome, "nome");
        }
        if (nao_vazio($CategoriaProduto, "CategoriaProduto") != NULL) {
            $errors[] = nao_vazio($CategoriaProduto, "CategoriaProduto");
        }
         if (nao_vazio($DescriProduto, "DescriProduto") != NULL) {
            $errors[] = nao_vazio($DescriProduto, "DescriProduto");
        }
        if (nao_vazio($PreProduto, "PreProduto") != NULL) {
            $errors[] = nao_vazio($PreProduto,"PreProduto");
        }
        if (tipo_Especifico($estoqueMin, "estoqueMin") != NULL) {
            $errors[] = tipo_Especifico($estoqueMin, "estoqueMin");
        }
        if (tipo_Especifico($estoqueMax, "estoqueMax") != NULL) {
            $errors[] = tipo_Especifico($estoqueMax, "estoqueMax");
        }
            if (count($errors) > 0) {
               $dados = array();
               $dados["errors"] = $errors;
               $dados["categorias"] = seleciona_todas_as_categorias();
               exibir("produtos/formulario", $dados);
           }else{              
           $msg = adicionarProduto($nome, $CategoriaProduto, $DescriProduto, $imagem, $PreProduto, $estoqueMin, $estoqueMax, $quantidade);
           echo $msg;
           }
  
    } else {
        $dados["categorias"] = seleciona_todas_as_categorias();
        exibir("produtos/formulario",$dados);
    }
}

/** anon */
function listar(){
    $dados = array();
    $dados["produtos"] = seleciona_todos_os_produtos();
    exibir('produtos/listar', $dados);
}

/** anon */
function ver($cod){
    $dados["produto"] = MostrarProdutoPorCodigo($cod);
    exibir('produtos/visualizar', $dados);
}

/** Adm */
function deletar($id) {
    deletarProduto($id);
    redirecionar("produto/ladm");
   
}
/** Adm */
function editar ($cod){
    if(ehPost()){
       $nome = $_POST["NomeProduto"];
        $CategoriaProduto = $_POST["CategoriaProduto"];
        $DescriProduto = $_POST["DescriProduto"];
        $imagem= $_POST["imagem"];
        $PreProduto = $_POST["PreProduto"];
        $estoqueMin = $_POST["eMin"];
        $estoqueMax = $_POST["eMax"];
        $quantidade= $_POST["quantidade"];
        
        EditarProdutoPorCodigo($nome, $CategoriaProduto, $DescriProduto, $imagem, $PreProduto, $estoqueMin, $estoqueMax,$quantidade, $cod);
       redirecionar("produto/ladm");
    }else{
        $dados["produto"] = MostrarProdutoPorCodigo($cod);
        $dados["categorias"] = seleciona_todas_as_categorias();
        exibir('produtos/editar', $dados);
        
    }
    
}

/** anon */
function comprar($idprod){
   // unset($_SESSION["carrinho"]); //p apagar sessão
    if(isset($_SESSION["carrinho"])) {
    $produtos = $_SESSION["carrinho"]; 
    } else {
        $produtos = array();
    }
    $produtos[] = $idprod;
    $_SESSION["carrinho"] = $produtos;
   redirecionar("car/mostrar"); 
}

/** anon */
function buscar(){
    if (ehPost()) {
        $nome = $_POST["nome"];
        $dados = array();
        $dados["produtos"] = MostrarProdutoPorNome($nome);
        exibir('produtos/listar', $dados);
    } else {
        exibir('produtos/listar', $dados);
    }
}
/*function test(){
    if(isset($_SESSION["mensagem"])){
        $frase = $_SESSION["mensagem"];
    } else {
        $frase = array();
    }
    
    $frase["uhuu"] = "YOU LEARNED :)";
    $dados["frase"] = $frase;
    exibir("login/index", $dados);
}*/

/** Adm */
function ladm(){
    $dados = array();
    $dados["produtos"] = seleciona_todos_os_produtos();
    exibir('produtos/ladm', $dados);
}
