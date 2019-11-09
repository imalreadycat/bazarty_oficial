<?php 

function adicionarCliente($nome, $cpf,$sexo, $aniversario, $email,  $senha, $tipo){
    $comando= "INSERT INTO cliente (nome,cpf, sexo, aniversario, email, senha, tipo)" 
            ."Values ('$nome','$cpf','$sexo','$aniversario', '$email', '$senha', '$tipo')";

    $resultado= mysqli_query($cnx=conn(), $comando);
    if (!$resultado){die ('Erro ao cadastrar cliente'. mysqli_error($cnx)); }
return 'Cliente cadastrado com sucesso!';

}

function seleciona_todos_os_clientes(){
    $sql = "select * from cliente";
    $result = mysqli_query(conn(), $sql);
    $clientes = array();
    while($linha = mysqli_fetch_assoc($result)){
        $clientes[] = $linha;
    }
    return $clientes;
}

function MostrarClientePorCodigo($cod){
    $sql = "select * from cliente where id_cliente = $cod";
    $result = mysqli_query(conn(), $sql);
    $clientes = mysqli_fetch_assoc($result);
    
    return $clientes;
}

function deletarCliente($idCliente) {
     $comando= "DELETE FROM cliente WHERE id_cliente=$idCliente";
     $conexao= conn();
     $resultado= mysqli_query($conexao, $comando);
   
     if($resultado==true){
       echo "Deu certo!";
   }else {
       echo "Deu errado";
   }
}

function EditarClientePorCodigo($nome, $cpf,$sexo, $aniversario, $email,  $senha, $tipo, $cod){
   $comando= "UPDATE cliente SET nome='$nome', cpf='$cpf', sexo='$sexo', aniversario='$aniversario', email='$email', senha='$senha', tipo='$tipo'WHERE id_cliente=$cod";

    $resultado= mysqli_query($cnx=conn(), $comando);
    if (!$resultado){die ('Erro ao atualizar os dados do cliente'. mysqli_error($cnx)); }
return 'Dados atualizados com sucesso!'; 
}


 ?>

