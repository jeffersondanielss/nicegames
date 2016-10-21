<?php 
  $title = 'NG - Shop';
  include_once('config.php');
  include_once('views/head.php');
  include_once('controllers/GetAllController.php');
  $productsCtrl = new GetAllController();
  $products = $productsCtrl->getAll('produto');
?>
<body>

  <?php include_once('views/header.php'); ?>

  <header>
    <h2 class="big-title">Produtos</h2>
  </header>


  <div class="single-product-area container">
    <?php include_once('views/shop/all-products.php'); ?>
  </div>

<?php include_once('views/footer.php'); ?>