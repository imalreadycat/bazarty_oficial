<?php
function adicionarEndereco($id_cliente,$rua,$numero,$complemento, $bairro,$cidade,$cep){
    $comando = "INSERT INTO endereco (id_cliente,rua,numero,complemento,bairro,cidade,cep)"
            . "VALUES ('$id_cliente','$rua','$numero','$complemento', '$bairro','$cidade','$cep')";
    $resultado = mysqli_query($conexao = conn(), $comando);
    if(!$resultado){ die('Erro no cadastro!' . mysqli_error($conexao));}
    return 'Cadastrado com sucesso!';
}
function pegarTodosEnderecos(){
    $sql = "SELECT * FROM endereco";
    $resultado = mysqli_query(conn(),$sql);
    $enderecos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $enderecos[] = $linha;
    }
   return $enderecos; 
}
function pegarEnderecoPorId($idendereco){
    $sql = "SELECT * FROM endereco WHERE idendereco = $idendereco";
    $resultado = mysqli_query(conn(), $sql);
    $enderecos = mysqli_fetch_assoc($resultado);
    return $enderecos;
}
function deletarEndereco($idendereco){
    $sql = "DELETE FROM endereco WHERE idendereco = $idendereco";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){
     die('Erro ao deletar endereco' . mysqli_error($cnx));   
    }
    return 'Endereco deletado com sucesso!';
}
function editarEndereco($idendereco,$rua,$numero,$complemento, $bairro,$cidade,$cep){
    $sql = "UPDATE endereco SET rua ='$rua',numero ='$numero',complemento='$complemento',bairro= '$bairro',cidade='$cidade',cep='$cep'  WHERE idendereco = $idendereco";
    $resultado = mysqli_query($conexao = conn(), $sql);
     if(!$resultado){ die('Erro ao editar endereco!' . mysqli_error($conexao)); }
    return 'Endereco alterado com sucesso!';
}
function pegarEnderecosPorUsuario($id_cliente){
    $sql = "SELECT * FROM endereco WHERE id_cliente = '$id_cliente'" ;
    $resultado = mysqli_query(conn(),$sql);
    $enderecos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $enderecos[] = $linha;
    }
   return $enderecos; 
}


