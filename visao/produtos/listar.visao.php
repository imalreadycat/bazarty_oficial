<h2 style="color: orange; margin-top: 5%;"> Produtos </h2>
<hr align="center" width="100%" size="1" color="orange">


<div class="corpinho">
    <div class="caixinha">
        <?php foreach ($produtos as $produto): ?>
            <div class="product-box">
                <div class="img-inside-box" style="max-width: 300px; max-height: 300px;">
                    <!--  style="max-width:277.563px;max-height: 264.200px" 
                         onMouseOver="this.src = 'publico/upload/<?=$produto["imagem"] ?>'" style="max-width:277.563px;max-height: 264.200px"
                         onMouseOut="this.src = 'publico/upload/<?= $produto["imagem"] ?>'"  style="max-width:277.563px;max-height: 264.200px" -->
                    <img src="<?=$produto["imagem"]?>" alt="Imagem" style="width:270px; height: 250px; max-width:277.563px;max-height: 264.200px;"
                         onClick="location = 'produto/ver/<?= $produto["id_produto"] ?>'">
                </div>
                <div class="details" style="width: 100%; ">
                    <h4>R$ <?= $produto["preco"] ?></h4>
                    <p style="margin: 0;">Todas as cores</p>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <style>
                        .checked {
                            color: orange;
                        }
                    </style>
                    <h2 style="color: orange"><?= $produto["nome"] ?></h2>
                    <div>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>