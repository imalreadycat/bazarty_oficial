<h2 style="color: orange; margin-top: 5%;"> <?= $produto["nome"] ?></h2>
<hr align="center" width="100%" size="1" color="orange">
<div class="corpinho">
    <div class="caixinha">
        <form action="" method="POST">
            Nome: <br> <input type="text" name=" NomeProduto" value="<?= $produto["nome"] ?>"><br><br>
            Categoria:<br> 
            <select name="CategoriaProduto">
                <option value="default">Selecione a categoria</option>
                <?php foreach ($categorias as $categoria):?>
                <option value="<?=$categoria["cod_categoria"]?>"><?=$categoria["Nome"]?></option>
                <?php endforeach;?>
            </select><br><br>
            Descrição:<br> <input type="text" name="DescriProduto" value="<?= $produto["descr"] ?>" ><br><br>
            Preço: <br> <input type="text" name="PreProduto" value="<?= $produto["preco"] ?>"><br><br>
            Imagem: <br><input type="img" name="imagem" value="<?= $produto["imagem"] ?>"><br><br>
            Estoque mínimo:<br> <input type="number" name="eMin" value="<?= $produto["estoque_minimo"] ?>"><br><br>
            Estoque máximo:<br> <input type="number" name="eMax" value="<?= $produto["estoque_maximo"] ?>"><br><br>
             Quantidade em estoque: <br> <input type="number" name="quantidade" value="<?= $produto[" quant_estoque"] ?>"> <br><br><br><br>
            <button style="color: orange" type="submit">Atualizar</button>
            <br> <br>
        
                <br><br><br><br>
         

        </form>
      
              <?php if(ehPost()){
             foreach ($errors as $erro){
                echo"$erro <br>";
            
 }
   }  
   ?>
    </div>
</div>
