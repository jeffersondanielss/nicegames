<div class="product-carousel">
  <?php
    include_once 'controllers/product/GetProductsController.php';
    $productsCtrl = new GetProductsController();
    $products = $productsCtrl->getProducts();

    foreach ($products as $product) { ?>
     <div class="single-product">';

       <div class="product-f-image">
        <img src="upload/<?php echo $product['image']; ?>" alt="">
        <div class="product-hover">
          <a href="product.php?id=<?php echo $product['id']; ?>" class="view-details-link">
            <i class="fa fa-link"></i> Ver detalhes
          </a>
        </div>
      </div>

      <h2>
        <a href="product.php?id=<?php echo $product['id']; ?>">
          <?php echo $product['titulo'] ?>
        </a>
      </h2>

      <div class="product-carousel-price">
        <ins> R$<?php echo $product['preco'] ?></ins>
      </div>
      
    </div>

  <?php } ?>
</div>