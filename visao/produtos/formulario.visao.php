<h2 style="color: orange; margin-top: 5%;"> Cadastre seu Produto</h2>
<hr align="center" width="100%" size="1" color="orange">
<div class="corpinho">
    <div class="caixinha">
        <form action="" method="POST" enctype="multipart/form-data">
            Nome: <br> <input type="text" name=" NomeProduto"><br><br>
            Categoria:<br> 
            <select name="CategoriaProduto">
                <option value="default">Selecione a categoria</option>
                <?php foreach ($categorias as $categoria):?>
                <option value="<?=$categoria["cod_categoria"]?>"><?=$categoria["Nome"]?></option>
                <?php endforeach;?>
            </select><br><br>
            Descrição:<br> <input type="text" name="DescriProduto"><br><br>
            Preço: <br> <input type="text" name="PreProduto"><br><br>
            Imagem: <br><input type="file" name="imagem"><br><br>
            Estoque mínimo:<br> <input type="number" name="eMin"><br><br>
            Estoque máximo:<br> <input type="number" name="eMax"><br><br>
            Quantidade em estoque: <br> <input type="number" name="quantidade"><br><br>
            <br><br>
            <button style="color: orange" type="submit">Enviar</button>
            <br> <br>
            
            <a style="color: orange" href="./produto/ladm/">Ver produtos cadastrados</a>

        </form>
      
              <?php if(ehPost()){
             foreach ($errors as $erro){
                echo"$erro <br>";
            
 }
   }  
   ?>
    </div>
</div>