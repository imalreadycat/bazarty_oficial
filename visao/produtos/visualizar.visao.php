<div class="cima" id="div-visualizar">
    <div class="imagens">
        <img src="<?= $produto["imagem"] ?>" alt="nature" style="width:277.563px;height: 264.200px; border-style: double;color: orange;" 
             onMouseOver="this.src = '<?= $produto["imagem"] ?>'" style="width:277.563px;height: 264.200px;"
             onMouseOut="this.src = '<?= $produto["imagem"] ?>'"  style="width:277.563px;height: 264.200px;"
             onClick="location = 'http://www.google.com.br'">
    </div>
    <div class="preed">
        <h2 style="color: orange"><?= $produto["nome"] ?></h2>
        <h3>(Cod.)<?= $produto["id_produto"] ?></h3>
        <h3> Preço:</h3><h2 class="pre"><?= $produto["preco"] ?></h2>
        
        <div class="columns medium-5">

            <select name="select">
                <option value="valor1" selected>Opções de cores</option> 
                <option value="valor2">Marrom</option>
                <option value="valor3">Preto</option>
                <option value="valor3">Bege</option>
                <option value="valor3">Azul</option>
            </select>
            <div> <hr align="center" width="100%" size="1" color=orange></div>
            <a href="./produto/comprar/<?= $produto["id_produto"] ?>"><input style="background-color: orange; float: right; width: 30%;" type="submit" value="Comprar" class="btn"></a>
        </div>
    </div>

    <hr style="float: left; margin-top: 2%; margin-bottom: 2%;" align="center" width="100%" size="1" color=orange >
</div>
<div style="float: left; padding-left: 2%; font-size:18; font-style: all; ">
    <h2 style="color: orange; font-size: 25;">Detalhes do produto</h2>
    <div style="font-style:unset;color: #585858;font-size: 20;">
        <p> <?= $produto["descr"] ?></p>
    </div>
</div>