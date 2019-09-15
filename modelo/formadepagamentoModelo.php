<?php
function adicionarFormadePagamento($descricao){
    $comando= "INSERT INTO forma_de_pagamento(descricao)"
            ."Values ('$descricao')";
    $resultado= mysqli_query($cnx=conn(), $comando);
    if (!$resultado){die ('Erro no cadastro!' . mysqli_error($cnx)); }
return 'Sucesso!';
}

function pegarTodasFormasDePagamento(){
    $sql= "SELECT * FROM forma_de_pagamento";
    $resultado = mysqli_query(conn(), $sql);
    $formasdepagamento = array();
    while ($linha= mysqli_fetch_assoc($resultado)) {
    $formasdepagamento  [] = $linha;  
    }    
    return $formasdepagamento;
}

function pegarFormaDePagamentoPorId($cod_formadepagamento){
    $sql = "SELECT * FROM forma_de_pagamento WHERE cod_formadepagamento= $cod_formadepagamento";
    $resultado = mysqli_query(conn(), $sql);
    $formadepagamento= mysqli_fetch_assoc($resultado);
    return $formadepagamento;
}

function deletarFormaDePagamento($cod_formadepagamento) {
    $comando= "DELETE FROM forma_de_pagamento WHERE cod_formadepagamento= $cod_formadepagamento";
     $conexao= conn();
     $resultado= mysqli_query($conexao, $comando);
   
     if($resultado==true){
       echo "Deu certo!";
   }else {
       echo "Deu errado";
   }
}
    function editarFormaDePagamento($cod_formadepagamento, $descricao){
     $sql= "UPDATE forma_de_pagamento SET descricao='$descricao' WHERE cod_formadepagamento = $cod_formadepagamento";
    $resultado= mysqli_query($conexao=conn(), $sql);
    if (!$resultado){die ('Erro ao editar'. mysqli_error($conexao)); }
return 'Forma de pagamento alterada com sucesso!'; 
}

    

?>