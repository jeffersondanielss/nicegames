<?php 
  $title = 'NICEGAMES';
  include_once('views/head.php');
?>
<body>

  <?php include_once('views/header.php'); ?>
  <?php include_once('views/home/slider.php'); ?>
  <?php include_once('views/home/promo-area.php'); ?>

  <div class="maincontent-area">
    <div class="container latest-product">

      <h2 class="section-title">Produtos Mais recentes</h2>
      <?php include_once('views/home/latest-products.php'); ?>

    </div>
  </div>
  
<?php include_once('views/footer.php'); ?>