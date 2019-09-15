
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2 style="color: orange; margin-top: 5%;"> <?= $categorias["Nome"] ?></h2>
        <hr align="center" width="100%" size="1" color="orange">
        
            <div class="caixinha">
                <form action="" method="POST">
                    Nome da categoria: <input type="text" name="Nome" value="<?= $categorias["Nome"] ?>"><br><br>
                    <button style="color: orange" type="submit">Atualizar</button>
                    <br><br><br><br><br><br><br><br>
                    
                </form>
                
              <?php if(ehPost()){
             foreach ($errors as $erro){
                echo"$erro <br>";
            
 }
   }  
   ?>
            </div>
        
        
    </body>
</html>
