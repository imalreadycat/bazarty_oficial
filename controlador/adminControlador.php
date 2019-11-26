<?php
require_once "modelo/finalizaModelo.php";
/** Adm */
function index(){
exibir("admin/cadastros");
}


function pedido_por_intervalo(){
     if (ehPost()) {   
         $data1= $_POST['d1'];
         $data2= $_POST['d2'];         
     $dados["pedidos"]= seleciona_pedidos_por_intervalo($data1, $data2); 
     exibir('admin/pedidos', $dados);
}else{
    exibir('admin/datas');
}
}


function pedido_por_cidade(){     
     $dados["pedidos"]= seleciona_pedidos_por_cidade(); 
     exibir('admin/pedidocidade', $dados);
}

function total_do_faturamento(){
    $total=0;
     if (ehPost()) {   
         $data1= $_POST['d1'];
         $data2= $_POST['d2'];         
     $pedidos= seleciona_pedidos_por_intervalo($data1, $data2);
    
     foreach ($pedidos as $prod):
            $total += $prod["total"];
     endforeach;
            
     $dados['total']= $total;
     exibir('admin/faturamento', $dados);
}else{
    exibir('admin/formtotal');
}    
}
function faturamento_mensal(){
    $total=0;
    if (ehPost()) {   
    $mes= $_POST['op'];
     $pedidos= seleciona_pedidos_mensalmente($mes);     
      foreach ($pedidos as $prod):
            $total += $prod["total"];
     endforeach;
    
    $dados['total']= $total;
    exibir('admin/faturamento', $dados);
}else{
    exibir('admin/faturamentomensal');
}
}

function faturamento_anual(){
    $total=0;
    if (ehPost()) {   
    $ano= $_POST['op'];
     $pedidos= seleciona_pedidos_anualmente($ano);     
      foreach ($pedidos as $prod):
            $total += $prod["total"];
     endforeach;
    
    $dados['total']= $total;
    exibir('admin/faturamento', $dados);
}else{
    exibir('admin/faturamentoanual');
}
}

?> 

