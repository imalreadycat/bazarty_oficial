<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2 style="color: orange; margin-top: 5%;"> Produtos e suas correspondentes categorias: </h2>
        <hr align="center" width="100%" size="1" color="orange">
         <div class="caixinha">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="color: orange">Produto</th>
                            <th style="color: orange">Categoria</th>
                            
                        </tr>
                    </thead>
                    <?php $cat = "";
                    foreach ($produtos as $produto):?>
                    <tr>  
                        
                        <td><?=$produto['nome']?></td>
                        <td><?php if($produto['categ'] != $cat){
                            echo $produto['categ'];
                        }else{
                            echo "      ";
                        }
                        $cat = $produto['categ'];?></td>
                       
                    </tr>

                    <?php endforeach;?>
                </table>
            </div>
       
    </body>
</html>