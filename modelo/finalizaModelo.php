<?php

function inserirPedido($id_cliente, $idformadepagamento, $idendereco, $total, $todos) {
$sql = "call cadastrar_pedido($id_cliente, $idformadepagamento, $idendereco,$total)";
     $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar Pedido' . mysqli_error($cnx)); }
    $id_pedido = mysqli_insert_id($cnx);
      foreach ($todos as $tudo):
        $id_produto=$tudo ['id_produto'];
        $sql = "insert into pedido_produto values($id_produto, $id_pedido, 1)";
        $resultado = mysqli_query($cnx = conn(), $sql);
        if(!$resultado) { die('Erro ao cadastrar Pedido' . mysqli_error($cnx)); }                 
     endforeach;

       
    return 'Pedido cadastrado com sucesso!';
}
function PedidosDoCliente($id_cliente){    
    $sql = "call mostrar_pedidos_do_cliente($id_cliente)";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos=array();
    while($linha = mysqli_fetch_assoc($resultado)){
        $pedidos[] = $linha;
    }
    return $pedidos;

}

function deletarPedidos($id_pedido) {
     $comando= "DELETE FROM pedido WHERE id_pedido=$id_pedido";
     $conexao= conn();
     $resultado= mysqli_query($conexao, $comando);
   
     if($resultado==true){
       echo "Deu certo!";
   }else {
       echo "Deu errado";
   }
}

