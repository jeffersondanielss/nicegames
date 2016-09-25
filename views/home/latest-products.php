<div class="product-carousel">
  <?php
    $produtos = $product->getAll();

    foreach ($produtos as $value) { ?>
     <div class="single-product">';

       <div class="product-f-image">
        <img src="upload/<?php echo $value['image']; ?>" alt="">
        <div class="product-hover">
          <a href="product.php?id=<?php echo $value['id']; ?>" class="view-details-link">
            <i class="fa fa-link"></i> Ver detalhes
          </a>
        </div>
      </div>

      <h2>
        <a href="product.php?id=<?php echo $value['id']; ?>">
          <?php echo $value['titulo'] ?>
        </a>
      </h2>

      <div class="product-carousel-price">
        <ins> R$<?php echo $value['preco'] ?></ins>
      </div>
      
    </div>

  <?php } ?>
</div>