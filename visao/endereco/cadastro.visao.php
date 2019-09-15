        <h2 style="color: orange; margin-top: 5%;"> Cadastre-seu endereço: </h2>
        <hr align="center" width="100%" size="1" color="orange">
  
<div class="corpinho">
    <div class="caixinha">
        <form action="" method="POST">          
                           
             <label  for="fname">Rua:</label><br>
                <input type="text"  name="rua"<?=@$endereco['rua']?>  ><br><br>
             <label for="fname">Número:</label><br>
                <input type="number"  name="numero"<?=@$endereco['numero']?> ><br><br>
             <label  for="fname">Complemento:</label><br>
                <input type="text"  name="complemento" <?=@$endereco['complemento']?> ><br><br>
             <label  for="fname">Bairro:</label><br>
                <input type="text"  name="bairro" <?=@$endereco['bairro']?>  ><br><br>
             <label  for="fname">Cidade:</label><br>
                <input type="text"  name="cidade" <?=@$endereco['cidade']?>  ><br><br>
             <label  for="fname">Cep:</label><br>
                 <input type="text"  name="cep" <?=@$endereco['cep']?> ><br><br>

                   
                        <button type="submit" class="signupbtn">Confirmar</button>
                           
               <br><br><br><br>
                <br><br><br><br>
                <a style="color: orange" href="./endereco/listar/">Ver endereços cadastrados</a>
                

        </form>
        
        
              <?php if(ehPost()){
             foreach ($errors as $erro){
                echo"$erro <br>";
            
 }
   }  
   ?>
    </div>
</div>
        
      
        
             