<?php 
  $title = 'NICEGAMES';
  include 'partials/head.php';
  include 'dashboard/functions/functions.php';
  session_start();
?>
<body>

  <?php include 'partials/header.php'; ?>

  <div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4" >
      <ul class="" id="bxslider-home4">
        <li><img src="img/slide-gta.jpg" class="gta-slide"><span class="icon"></li>
        <li><img src="img/slide-need.jpg"><span class="icon"></li>
        <li><img src="img/slide-minecraft.png"><span class="icon"></li>
      </ul>
    </div>
    <!-- ./Slider -->
  </div> <!-- End slider area -->

  <div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="single-promo promo1">
            <i class="fa fa-refresh"></i>
            <p>30 Dias de retorno</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-promo promo2">
            <i class="fa fa-truck"></i>
            <p>100% digital</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-promo promo3">
            <i class="fa fa-lock"></i>
            <p>Pagamentos seguros</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-promo promo4">
            <i class="fa fa-gift"></i>
            <p>Novos produtos</p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- End promo area -->


  <div class="maincontent-area">
    <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="latest-product">
           <h2 class="section-title">Produtos Mais recentes</h2>

           <div class="product-carousel">
            <?php
              $produtos = $product->getAll();

              foreach ($produtos as $value) {
               $line ='   <div class="single-product">';

               $line .=' <div class="product-f-image">';
               $line .='<img src="upload/'. $value['image'] .'" alt="">';
               $line .='<div class="product-hover">';
               $line .=' <a href="produto.php?id=' . $value['id'] . '" class="view-details-link" ><i class="fa fa-link"></i> Ver detalhes</a>';
               $line .=' </div>';
               $line .=' </div>';

               $line .='  <h2><a href="produto.php?id=' . $value['id'] . '">' . $value['titulo'] .'</a></h2>';

               $line .='  <div class="product-carousel-price">';
               $line .='<ins> R$' . $value['preco'] .'</ins>';

               $line .=' </div> ';
               $line .=' </div>';

               echo $line;
             }
           ?>
           </div>
         </div>
       </div>
     </div>
   </div>
  </div>
<?php include 'partials/footer.php'; ?>