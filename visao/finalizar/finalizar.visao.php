<div class="col-25">
            <div class="container">

              <h2 style="color: orange; margin-top: 5%;"> Verifique seus dados</h2>
        <hr align="center" width="100%" size="1" color="orange">
              <?php foreach ($produto as $prod): ?>
              <p><a href="./produto/ver/<?= $prod["id_produto"] ?>" style="color: orange; font-size: 18px;"> <?= $prod["nome"] ?></a><span class="price">$<?= $prod["preco"] ?><a href="./car/remover/<?= $prod["id_produto"] ?>"> Remover</a></span></p>
              <?php endforeach; ?>
              <hr>
              <p>Total <span class="price" style="color:black"><b>R$ <?= $total ?></b></span></p>
            </div>
</div>
<div class="col-25">
            <div class="container">
<div class="ui horizontal segments">
  <div class="ui segment">
   <h2 style="color: orange; margin-top: 5%;"> Endereço de entrega:</h2>
        <hr align="center" width="100%" size="1" color="orange">
       
       
		
		<?php foreach ($endereco as $endereco): ?>
       

                            
                            Rua: <?=$endereco['rua']?><br>
				Número:<?=$endereco['numero']?><br>
				Complemento:<?=$endereco['complemento']?><br>
				Bairro:<?=$endereco['bairro']?><br>
				Cidade<?=$endereco['cidade']?><br>
				Cep:<?=$endereco['cep']?><br>
                                 
                                                     
                                <h4 style="color: orange"> Deseja atualizar seu endereço antes de finalizar sua compra <td><a href="./endereco/editar/<?=$endereco['idendereco']?>/<?=$endereco['id_cliente']?>">Sim</a></h4>
			
		<?php endforeach; ?>

          
  </div>
  <div class="ui segment">
    <h2 style="color: orange; margin-top: 5%;"> Possui cupom ou vale?</h2>
   
        <hr align="center" width="100%" size="1" color="orange">
         <h6> Informe aqui: </h6>
<div class="ui form">
  <div class="field">
    <label></label>
    <input type="text">
  </div> 
</div>
         <br><br>
         
<button class="ui secondary button">
  Aplicar
</button>
<button class="ui button">
  Cancelar
</button>
  </div>
 
</div>
        </div>
</div>
<div id="final">
 <hr align="center" width="100%" size="1" color="orange">
    <h2 style="color: orange; margin-top: 5%;"> Formas de pagamento</h2>    
    
    <div class="ui stackable four column grid" style="border-bottom: 6px solid orange;
  background-color: lightgrey;">
  <div class="column">Cartão de crédito
      <div style="padding: 7% ">   <i class="credit card icon"></i> </div>  
  </div>
  <div class="column">Cartão de débito
   <div style="padding: 7% "> <i class="cc mastercard icon"></i> </div>  
  </div>  
  <div class="column">Boleto
      <div style="padding: 7% "> <i class="qrcode icon"></i> </div>  
  </div>
  <div class="column">Pagar na loja
   <div style="padding: 7% "> <i class="warehouse icon"></i> </div>  
  </div>
    </div><br><br>
    <p> Sua compra tem um Total de <span class="price" style="color:black"><b>R$ <?= $total ?></b></span></p>
    
                  <a href="./car/finalizar"><input style="background-color: orange; width: 8%; " type="submit" value="Pagar" class="btn"></a>

         
</div>
                