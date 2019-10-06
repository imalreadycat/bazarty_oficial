<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2 style="color: orange; margin-top: 5%;"> Produtos cadastrados: </h2>
        <hr align="center" width="100%" size="1" color="orange">
         <div class="caixinha">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="color: orange">nome</th>
                            <th style="color: orange">preco</th>
                            <th >Ver</th>
                            <th>Deletar</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <?php foreach ($produtos as $produto):?>
                    <tr>  
                        <td><?=$produto['nome']?></td>
                        <td><?=$produto['preco']?></td>
                        <td><a href="./produto/ver/<?=$produto['id_produto']?>">Ver</a></td>
                        <td><a href="./produto/deletar/<?=$produto['id_produto']?>">Deletar</a></td>
                         <td><a href="./produto/editar/<?=$produto['id_produto']?>">Editar</a></td>
                    </tr>

                    <?php endforeach;?>
                </table>
            </div>
       
    </body>
</html>