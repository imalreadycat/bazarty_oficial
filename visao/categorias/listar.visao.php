<h2 style="color: orange; margin-top: 5%;"> Categorias </h2>
<hr align="center" width="100%" size="1" color="orange">

    <div class="caixinha">
        <table class="table">
            <thead>
                <tr>
                    <th style="color: orange">  Nome     </th>
                    <th style="color: orange">  Código   </th>
                    <th>           </th>
                    <th>           </th>
                    <th>           </th>
                </tr>
            </thead>
            <?php foreach ($categorias as $categoria):?>
            <tr>
                <td><?= $categoria["Nome"]?></td>
                <td><?= $categoria["cod_categoria"]?></td>
                <td><a href="./categoria/ver/<?=$categoria["cod_categoria"]?>">Ver</a></td>
                <td><a href="./categoria/deletar/<?=$categoria["cod_categoria"]?>"> Deletar </a></td>
                <td><a href="./categoria/editar/<?=$categoria["cod_categoria"]?>">  Editar </a></td>
            </tr>
         
            <?php endforeach;?>
        </table>
   </div>

