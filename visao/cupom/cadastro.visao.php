
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2 style="color: orange; margin-top: 5%;"> Insira seu cupom:</h2>
        <hr align="center" width="100%" size="1" color="orange">
       
            <div class="caixinha">
                <form action="" method="POST">
                    <label style="color: orange" for="fname">Nome cupom:</label><br>
             <input type="text"  name="nome" <?=@$cupom['nome']?>"><br><br>
                   <label style="color: orange" for="fname">Desconto:</label><br>
              <input type="number"  name="desconto" value="<?=@$cupom['desconto']?> "><br><br>
                    <button style="color: orange" type="submit">Cadastrar</button>
                    <br><br><br>
                    <a style="color: orange" href="./cupom/listar/">Ver os cupons cadastrados</a>
                </form>
                
              <?php if(ehPost()){
             foreach ($errors as $erro){
                echo"$erro <br>";
            
 }
   }  
   ?>
            </div>
        </div
        
    </body>
</html>



             
              