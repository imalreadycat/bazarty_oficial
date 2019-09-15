
        <h2 style="color: orange; margin-top: 5%;"> <?= $clientes["nome"]?> </h2>
        <hr align="center" width="100%" size="1" color="orange">
      
            <div class="caixinha">
    <ul>
	<li>Cod.Cliente: <?= $clientes["id_cliente"] ?></li>
	<li>E-mail: <?= $clientes["email"]?></li>
        <li>CPF: <?= $clientes["cpf"]?></li>
        <li>Sexo: <?= $clientes["sexo"]?></li>
        <li>Tipo: <?= $clientes["tipo"]?></li>
    </ul>  
            </div>
        <div style="
     display: flex;
     flex-wrap: wrap;
     justify-content: space-around">
            
            <a style="color: orange" href="./endereco/adicionar/<?= $clientes["id_cliente"] ?>"><button style="color: orange">Cadastrar endereço(s)</button></a><br>
               <a style="color: orange" href="./endereco/listar/<?= $clientes["id_cliente"] ?>">Ver endereços cadastrados</a>
            </div>
        
  <?php
  require_once 'visao/endereco/listar.visao.php';
  ?>
                
  