<?php

function adicionarProduto($nome, $CategoriaProduto, $DescriProduto, $imagem, $PreProduto, $estoqueMin, $estoqueMax, $quantidade){
    $comando= "INSERT INTO produto(nome, cod_categoria, descr, imagem, preco, estoque_minimo, estoque_maximo, quant_estoque)
    Values('$nome', '1','$DescriProduto', '$imagem','$PreProduto', '$estoqueMin', '$estoqueMax', '$quantidade')";

    $resultado= mysqli_query($cnx=conn(), $comando);
    if (!$resultado){die ('Erro ao cadastrar o produto'. mysqli_error($cnx)); }
return 'Produto cadastrado com sucesso!';

}


function seleciona_todos_os_produtos(){
    $sql = "select * from produto";
    $result = mysqli_query(conn(), $sql);
    $produtos = array();
    while($linha = mysqli_fetch_assoc($result)){
        $produtos[] = $linha;
    }
    return $produtos;
}

function MostrarProdutoPorCodigo($cod){
    $sql = "select * from produto where id_produto= $cod";
    $result = mysqli_query(conn(), $sql);
    $produtos = mysqli_fetch_assoc($result);
    
    return $produtos;
}

function deletarProduto($idProduto) {
     $comando= "DELETE FROM produto WHERE id_produto=$idProduto";
     $conexao= conn();
     $resultado= mysqli_query($conexao, $comando);
   
     if($resultado==true){
       echo "Deu certo!";
   }else {
       echo "Deu errado";
   }
}
function EditarProdutoPorCodigo($nome, $CategoriaProduto, $DescriProduto, $imagem, $PreProduto, $estoqueMin, $estoqueMax, $quantidade,$cod){
   $comando= "UPDATE produto SET nome='$nome', cod_categoria='$CategoriaProduto', descr='$DescriProduto', imagem='$imagem', preco='$PreProduto', estoque_minimo='$estoqueMin', estoque_maximo='$estoqueMax',  quant_estoque='$quantidade' WHERE id_produto='$cod'";
    $resultado= mysqli_query($cnx=conn(), $comando);
    if (!$resultado){die ('Erro ao atualizar os produtos'. mysqli_error($cnx)); }
return 'Atualizados com sucesso!'; 
}

function MostrarProdutoPorNome($nome){
    $sql = "select * from produto where upper(nome) like upper('%".$nome."%')";
    $result = mysqli_query(conn(), $sql);
    while($linha = mysqli_fetch_assoc($result)){
        $produtos[] = $linha;
    }
    
    return $produtos;
}

function seleciona_todos_enderecos(){
    $sql = "select * from endereco";
    $result = mysqli_query(conn(), $sql);
    $enderecos = array();
    while($linha = mysqli_fetch_assoc($result)){
        $enderecos[] = $linha;
    }
    return $enderecos;
}