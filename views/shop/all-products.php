<?php

  $produtos = $product->getAll();
  
  foreach ($produtos as $value) { ?>

    <div class="col-md-3 col-sm-6">
      <div class="single-shop-product">
        <div class="product-upper">
          <a href="product.php?id=<?php echo $value['id']; ?>">
            <img src="upload/<?php echo $value['image'] ; ?>" alt="">
          </a>
        </div>
        <h2>
          <a href="product.php?id=<?php echo $value['id']; ?>">
           <?php echo $value['titulo']; ?>
          </a>
        </h2>
        <p class="product-carousel-price">R$ <?php  echo $value['preco'] ; ?></p>  

        <div class="product-option-shop">
          <a class="add_to_cart_button" href="dashboard/functions/buy/addCart.php?id=<?php echo $value['id']; ?>">Adicionar ao carrinho</a>
        </div>
      </div>
    </div>

<?php } ?>