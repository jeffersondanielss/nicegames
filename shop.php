<?php 
  $title = 'NG - Shop';
  include 'views/head.php';
  include 'dashboard/functions/functions.php';
?>
<body>

  <?php include 'views/header.php'; ?>

  <header>
    <h2 class="big-title">Produtos</h2>
  </header>


  <div class="single-product-area container">
    <?php include 'views/shop/all-products.php'; ?>
  </div>

<?php include 'views/footer.php'; ?>