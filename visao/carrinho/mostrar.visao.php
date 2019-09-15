<div class="col-25">
            <div class="container">

              <h4 style="font-size: 30px; color: orange">Meu carrinho<span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
              <?php foreach ($produto as $prod): ?>
              <p><a href="./produto/ver/<?= $prod["id_produto"] ?>" style="color: orange; font-size: 18px;"> <?= $prod["nome"] ?></a><span class="price">$<?= $prod["preco"] ?><a href="./car/remover/<?= $prod["id_produto"] ?>"> Remover</a></span></p>
              <?php endforeach; ?>
              <hr>
              <p>Total <span class="price" style="color:black"><b>R$ <?= $total ?></b></span></p>
            
            </div>
        </div>