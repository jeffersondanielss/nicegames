<?php 
  $title = 'NG - Carrinho';
  include 'views/head.php';
  include 'dashboard/functions/functions.php';
  $currUser = $client->getLoggedUser();
?>
<body>

  <?php include 'views/header.php'; ?>

  <h2 class="big-title">Carrinho</h2>

  <div class="single-product-area">
    <div class="container">
      <?php include 'views/cart/table.php'; ?>
      <?php include 'dashboard/partials/message.php'; ?>
    </div>
  </div>

<?php include 'views/footer.php' ?>