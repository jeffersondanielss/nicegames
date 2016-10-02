<?php 
  $title = 'NG - Carrinho';
  include_once 'views/head.php';
  include_once 'controllers/buy/PurchasesController.php';
  $PurchasesCtrl = new PurchasesController();
  $purchases = $PurchasesCtrl->getPurchases();
  $currUser = $PurchasesCtrl->getLoggedUser();
?>
<body>

  <?php include_once 'views/header.php'; ?>

  <h2 class="big-title">Carrinho</h2>

  <div class="single-product-area">
    <div class="container">
      <?php include_once 'views/cart/table.php'; ?>
      <?php include_once 'dashboard/views/message.php'; ?>
    </div>
  </div>

<?php include_once 'views/footer.php' ?>