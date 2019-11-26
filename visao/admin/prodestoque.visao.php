<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2 style="color: orange; margin-top: 5%;"> Produto e Estoque: </h2>
        <hr align="center" width="100%" size="1" color="orange">
         <div class="caixinha">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="color: orange">Nome</th>
                            <th style="color: orange">Quantidade em estoque</th>
                            
                        </tr>
                    </thead>
                    <?php foreach ($produtos as $produto):?>
                    <tr>  
                        <td><?=$produto['nome']?></td>
                        <td><?=$produto['quant_estoque']?></td>
                       
                    </tr>

                    <?php endforeach;?>
                </table>
            </div>
       
    </body>
</html>