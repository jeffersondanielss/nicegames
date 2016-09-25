<?php 
  $title = 'NICEGAMES';
  include 'views/head.php';
  include 'dashboard/functions/functions.php';
?>
<body>

  <?php include 'views/header.php'; ?>
  <?php include 'views/home/slider.php'; ?>
  <?php include 'views/home/promo-area.php'; ?>

  <div class="maincontent-area">
    <div class="container latest-product">

      <h2 class="section-title">Produtos Mais recentes</h2>
      <?php include 'views/home/latest-products.php'; ?>

    </div>
  </div>
  
<?php include 'views/footer.php'; ?>