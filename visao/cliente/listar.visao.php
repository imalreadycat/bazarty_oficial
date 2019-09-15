        <h2 style="color: orange; margin-top: 5%;"> Clientes cadastrados</h2>
        <hr align="center" width="100%" size="1" color="orange">
  
            <div class="caixinha">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="color: orange">  Nome </th>
                            <th style="color: orange">  Cpf  </th>
                            <th style="color: orange">  Email  </th>
                        </tr>
                    </thead>
                    <?php foreach ($clientes as $cliente):?>
                    
                    <tr>
                        <td><?= $cliente["nome"]?></td>
                        <td><?= $cliente["cpf"]?></td>                       
                        <td><?= $cliente["email"]?></td>
                        
                        <td><a href="./cliente/ver/<?=$cliente["id_cliente"]?>">Ver</a></td>
                        <td><a href="./cliente/deletar/<?=$cliente["id_cliente"]?>"> Deletar </a></td>
                        <td><a href="./cliente/editar/<?=$cliente["id_cliente"]?>"> Editar </a></td>
                    </tr>

                    <?php endforeach;?>
                </table>
            </div>
        
