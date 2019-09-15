        <h2 style="color: orange; margin-top: 5%;"> Seu endereço:</h2>
        <hr align="center" width="100%" size="1" color="orange">
        <div class="corpinho">
            <div class="caixinha">
                <table class="table">
                    <thead>
		<tr>
			<th>Id do seu endereco</th>
			<th>Rua</th>
			<th>Número</th>
			<th>Complemento</th>
			<th>Bairro</th>
			<th>Cidade</th>
                        <th>Cep</th>
			
		</tr>
	</thead>
		<?php foreach ($enderecos as $endereco): ?>
			<tr>
				<td><?=$endereco['idendereco']?></td>
				<td><?=$endereco['rua']?></td>
				<td><?=$endereco['numero']?></td>
				<td><?=$endereco['complemento']?></td>
				<td><?=$endereco['bairro']?></td>
				<td><?=$endereco['cidade']?></td>
				<td><?=$endereco['cep']?></td>
                                 
                                <td><a href="./endereco/ver/<?=$endereco['idendereco']?>">Ver</a></td>
				<td><a href="./endereco/deletar/<?=$endereco['idendereco']?>/<?=$endereco['id_cliente']?>">Deletar</a></td>                                
                                <td><a href="./endereco/editar/<?=$endereco['idendereco']?>/<?=$endereco['id_cliente']?>">Atualizar</a></td>
			</tr>
		<?php endforeach; ?>
</table>
            </div>
        </div>
