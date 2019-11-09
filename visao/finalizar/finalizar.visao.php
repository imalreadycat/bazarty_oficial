<div class="col-25">
    <div class="container">

              <h2 style="color: orange; margin-top: 5%;"> Verifique seus dados</h2>
        <hr align="center" width="100%" size="1" color="orange">
              <?php  foreach ($produto as $prod): ?>
              <p><a href="./produto/ver/<?= $prod["id_produto"] ?>" style="color: orange; font-size: 18px;"> <?= $prod["nome"] ?></a><span class="price">$<?= $prod["preco"] ?></span></p>
              <?php endforeach; ?>
              <hr>
              <p>Total <span class="price" style="color:black"><b>R$ <?= $total ?></b></span></p>
    </div>
</div>


<div class="col-25">
            <div class="container">
<div class="ui horizontal segments">    
     <div class="ui segment">
      <h2 style="color: orange; margin-top: 5%;"> Possui cupom ou vale?</h2>
        <hr align="center" width="100%" size="1" color="orange">
        <form action="car/desconto" method="POST">
         <h6> Informe aqui: </h6>
<div class="ui form">
  <div class="field">
    <input type="text"  name="nomec">
    <br><br>
    <button style="color: orange;" type="submit">Aplicar</button>

  </div> 
</div>
</form>         
  </div>
  <div class="ui segment">

      
   <h2 style="color: orange; margin-top: 5%;"> Endereço de entrega:</h2>
        <hr align="center" width="100%" size="1" color="orange">
       
        <form action="car/finalizar/<?=$total?>" method="POST">   
		
		<?php foreach ($enderecos as $endereco): ?>
       

                             
                                Rua: <?=$endereco['rua']?><br>
				Número:<?=$endereco['numero']?><br>
				Complemento:<?=$endereco['complemento']?><br>
				Bairro:<?=$endereco['bairro']?><br>
				Cidade: <?=$endereco['cidade']?><br>
				Cep:<?=$endereco['cep']?><br>
                                 
                                                     
                                <h4 style="color: orange"> Deseja atualizar seu endereço antes de finalizar sua compra <td><a href="./endereco/editar/<?=$endereco['idendereco']?>/<?=$endereco['id_cliente']?>">Sim</a></h4>
                              
		<?php endforeach; ?>
                                               
      <hr align="center" width="100%" size="1" color="orange">  
      
        <p>Selecione o endereço que deseja receber seu(s) produto(s):</p>                         
           <?php foreach ($enderecos as $endereco): ?>     
        <INPUT type="radio" name="end" value="<?=$endereco['idendereco']?>"/> <?=$endereco['rua']?> 
            <?php endforeach; ?>
    
     
  </div>
    
 
</div>
        </div>
</div>
<div id="final">  
    
 <hr align="center" width="100%" size="1" color="orange">
   
    <h2 style="color: orange; margin-top: 5%;"> Formas de pagamento</h2>    
      

       <div class="ui stackable four column grid" style="border-bottom: 6px solid orange;
       background-color: lightgrey;">
            
                  <?php foreach ($formapg as $pagamento): ?>       
               <div class="column"> <?=$pagamento['descricao']?>
                   <div style="padding: 7% ">   <i class="credit card icon"></i> <br><br> <div><input type="radio" name="fp" value="<?=$pagamento['idformadepagamento']?>" /></div>
          </div>  
               </div>
            <?php endforeach; ?>  
    <br><br>   
</div>
    
    <br>

     <a href="./car/finalizar/<?=$total ?>"><input style="background-color: orange; width: 8%; " type="submit" value="Finalizar " class="btn"></a>


             </form>
    