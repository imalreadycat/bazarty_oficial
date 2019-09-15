<h2 style="color: orange; margin-top: 5%;"> Forma de Pagamento</h2>
<hr align="center" width="100%" size="1" color="orange">

    <div class="caixinha">
        <form action="" method="POST">
            Descrição: <input type="text" name="descricao"value="<?=@$formadepagamento['descricao']?>"><br><br>
            
       

        <?php
            if(ehPost()){
                foreach($erros as $erro){
                    echo "$erro<br>";
                }
            }
        ?>
        
        <br>
        
        <button style="color: orange">Cadastrar</button>
      
        
        </form>
</div>