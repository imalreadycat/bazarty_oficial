<?php
function inserirPedido($id_cliente, $idformadepagamento, $idendereco, $total, $todos) {
 $sql= "INSERT INTO pedido(id_cliente, idformadepagamento, idendereco,total, datacompra)
  Values('$id_cliente', '$idformadepagamento', '$idendereco','$total', CURDATE())";
 
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

function seleciona_pedidos_por_intervalo($data1, $data2){
    $sql = "select datacompra, total from pedido where datacompra>='$data1' and datacompra<='$data2'";
   
    $result = mysqli_query(conn(), $sql);
    $pedidos = array();
    while($linha = mysqli_fetch_assoc($result)){
        $pedidos[] = $linha;
    }
    return $pedidos;
}


function seleciona_pedidos_por_cidade(){
  $sql = " select pedido.datacompra,pedido.total, endereco.cidade from pedido
               inner join endereco
               on endereco.idendereco = pedido.idendereco
                order by endereco.cidade";
    $result = mysqli_query(conn(), $sql);
    $pedidos = array();
    while($linha = mysqli_fetch_assoc($result)){
        $pedidos[] = $linha;
    }
    return $pedidos;  

}

function seleciona_pedidos_mensalmente($mes){
    $sql = "select datacompra, total from pedido where date_format(datacompra, '%m') = '$mes'";         
   
    $result = mysqli_query(conn(), $sql);
    $pedidos = array();
    while($linha = mysqli_fetch_assoc($result)){
        $pedidos[] = $linha;
    }
    return $pedidos;
}
function seleciona_pedidos_anualmente($ano){
    $sql = "select datacompra, total from pedido where date_format(datacompra, '%Y') = '$ano'";         
   
    $result = mysqli_query(conn(), $sql);
    $pedidos = array();
    while($linha = mysqli_fetch_assoc($result)){
        $pedidos[] = $linha;
    }
    return $pedidos;
}