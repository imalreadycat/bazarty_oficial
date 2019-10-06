<?php require_once "./biblioteca/acesso.php"; ?>
<div id="tudo">
	<div id="cima" style="height: 10%;">
		<img style=" width: 15%; padding: 1%; " src="./publico/img/logo/logo.png">
		 <div class="ui category search" style="float: right; margin-top: 6%;">
                    <form action="./produto/buscar" method="Post">
                        <div class="ui search">
                        <div class="ui icon input">
                         <input name="nome" class="prompt" type="text" placeholder="Pesquisar">
                         <i class="search icon"></i>
                        </div>
                            <div class="results">
                            </div>
                     </div>
                    </form>
		</div>
		<div id="carrinho" style="float: right; margin-right: 5%; margin-top: 6%;">
                    <a  href="./car/mostrar"><i class="cart plus icon"> Carrinho</i>
		</div><!-- ALTERAR CAMINHO PARA O CARRINHO (HREF) -->
	</div>

	<div id="Menu" style="height: 10%; margin-bottom: 3%; margin-top: 6%;">
		<div class="navbar">
		<a  style="padding: 1%; margin: 0% 5%;"class="active" href="./produto/listar/"><i class="home icon"></i> Home</a> 
		
		<a style="padding: 1%; margin-right: 4%;" href="#"><i class="shopping bag icon"></i> aa</a> 
		<a  style="padding: 1%; margin-right: 4%;" href="#"><i class="shopping bag icon"></i> Sapatos</a> 
		<a  style="padding: 1%; margin-right: 4%;" href="#"><i class="shopping bag icon"></i> Outros</a> 
                
                
		<a  style="padding: 1%; margin-right: 2%;" href="./login/index/"><i class="user circle icon"></i> Login</a>
                <a style="padding: 1%; margin-right: 4%;" href="./cliente/ver/<?= acessoPegarUsuarioLogado(); ?>"><i class="user circle icon"></i> Minha conta </a>
                
  
                
                
                <a  style="padding: 1%; margin-right: 4%;" href="./cliente/cadastro/"><i class="user outline icon"></i> Cadastre-se</a>
  		</div>
	</div>
</div>