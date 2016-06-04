<?php 
  include 'dashboard/functions/functions.php';
  $curr = $product->getById( $_GET['id'], 'produto' );

  foreach ($curr as $value) {
    $title = 'NG - ' . $value['titulo'];
  }
  include 'partials/head.php';
  session_start();
?>
<body>

  <?php include 'partials/header.php'; ?>
  <div class="product-big-title-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="product-bit-title text-center">
           <?php
              foreach ($curr as $value) {
                echo '<h2>' . $value['titulo'] . '</h2>';
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="single-product-area">
    <div class="container">
      <div class="row">
        
        <div class="col-md-12">
          <div class="product-content-right">
            <?php
              foreach ($curr as $value) {
                $line  = '<div class="row">';
                $line .=  '<div class="col-sm-6">';
                $line .=    '<div class="product-images">';
                $line .=      '<div class="product-main-img">';
                $line .=        '<img src="upload/'. $value['image'] .'" width="450px" alt="">';
                $line .=      '</div>';
                $line .=    '</div>';
                $line .=  '</div>';

                $line .=  '<div class="col-sm-6">';
                $line .=    '<div class="product-inner">';

                $line .=      '<div class="product-inner-price">';
                $line .=        '<span>Preço: </span><ins>' . $value['preco'].'</ins>';
                $line .=      '</div>';
                $line .=      '<a class="add_to_cart_button" href="dashboard/functions/buy/addCart.php?id=' . $value['id'].'">Adicionar ao carrinho</a>';

                $line .=      '<div class="prod-infos">';
                $line .=      '<div><h4 class="infos">Titulo:</h4><span class="infos-value">' . $value['titulo'].'</span></div>';
                $line .=      '<div><h4 class="infos">Gênero: </h4><span class="infos-value">' . $value['genero'].'</span></div>';
                $line .=      '<div><h4 class="infos">Lançamento: </h4><span class="infos-value">' . $value['lancamento'].'</span></div>';
                $line .=      '<div><h4 class="infos">Audio: </h4><span class="infos-value">' . $value['audio'].'</span></div>';
                $line .=      '<div><h4 class="infos">Legenda: </h4><span class="infos-value">' . $value['legenda'].'</span></div>';
                $line .=      '<div><h4 class="infos">Tamanho: </h4><span class="infos-value">' . $value['tamanho'].'</span></div>';
                $line .=      '<div><h4 class="infos">Quantidade: </h4><span class="infos-value">' . $value['quantidade'].'</span></div>';
                $line .=    '</div>';
                $line .=  '</div>';
                $line .=  '</div>';
                $line .= '</div>';
                echo $line;
              }
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'partials/footer.php'; ?>