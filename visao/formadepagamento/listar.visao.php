<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2 style="color: orange; margin-top: 5%;">Forma de pagamento: </h2>
        <hr align="center" width="100%" size="1" color="orange">
       
            <div class="caixinha">
        
   <table class="table">
            <thead>
                <tr>
                    <th style="color: orange">Cod_formadepagamento</th>
                    <th style="color: orange">Descrição</th>
                    <th>Ver </th>
                    <th>Deletar</th>
                    <th>Editar</th>
                </tr>
            </thead>
        <?php foreach ($formasdepagamento as $formadepagamento): ?> 
            <tr>
                <td><?=$formadepagamento['cod_formadepagamento']?></td>
                <td><?=$formadepagamento['descricao']?></td>
                <td><a href="./formadepagamento/ver/<?=$formadepagamento['cod_formadepagamento']?>">Ver</a></td>
                <td><a href="./formadepagamento/deletar/<?=$formadepagamento['cod_formadepagamento']?>">Deletar</a></td>
                <td><a href="./formadepagamento/editar/<?=$formadepagamento['cod_formadepagamento']?>">Editar</a></td>          
             
            </tr>
           
        <?php endforeach; ?>
            
   </table> 
                
            </div> 
        <a style="color: orange"href="./formadepagamento/adicionar ">Nova forma de pagamento</a>
  
        
     
        
        
      