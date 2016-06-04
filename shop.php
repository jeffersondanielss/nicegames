<?php 
  $title = 'NG - Shop';
  include 'partials/head.php';
  include 'dashboard/functions/functions.php';
  session_start();
?>
<body>

  <?php include 'partials/header.php'; ?>

  <div class="product-big-title-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="product-bit-title text-center">
            <h2>Shop</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="single-product-area">
    <div class="container">
      <div class="row">
        <?php
        $produtos = $product->getAll();

        foreach ($produtos as $value) {
          $line= '<div class="col-md-3 col-sm-6">';
          $line .='<div class="single-shop-product">';
          $line.= '<div class="product-upper">';
          $line.=     '<img src="upload/'. $value['image'] .'" alt="">';
          $line.= '</div>';
          $line.= '<h2><a href="produto.php?id=' . $value['id'] . '">' . $value['titulo'] .'</a></h2>';
          $line.= '<div class="product-carousel-price">';
          $line.= '<ins>' .  $value['preco'] .'</ins>';
          $line.= '</div>  ';

          $line.= '<div class="product-option-shop">';
          $line.= '<a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Adicionar ao carrinho</a>';
          $line.= '</div>';                      
          $line.= '</div>';
          $line.= '</div>';

          echo $line;
        }
        ?>
      </div>
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>