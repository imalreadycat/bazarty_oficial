<h2 style="color: orange; margin-top: 5%;"> Seus Pedidos:</h2>
        <hr align="center" width="100%" size="1" color="orange">
  
            <div class="caixinha">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="color: orange"> Data da compra </th>
                            <th style="color: orange">  Total  </th>
                        </tr>
                    </thead>
                    <?php foreach ($pedidos as $pedido):?>
                    
                    <tr>
                        <td><?= $pedido["datacompra"]?></td>
                        <td><?= $pedido["total"]?></td>                       
                        <td><a href="./car/deletar/<?=$pedido["id_pedido"]?>"> Deletar </a></td>
                       
                    </tr>

                    <?php endforeach;?>
                </table>
            </div>