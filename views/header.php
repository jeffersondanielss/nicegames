<?php
  include_once 'controllers/HeaderController.php';
  $header = new HeaderController();
  $name = $header->getUserName();
  $user = empty($_SESSION['email']) || empty($_SESSION['senha']) ? true : false;
?>

<div class="header-area">
  <div class="container">
    <?php $user ? include 'views/login.php' : include 'views/welcome.php'; ?>
  </div> 
</div><!-- End header area -->

<div class="site-branding-area">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="logo">
          <h1><a href="./"><img src="img/ng-logo.png"  alt="nicegames"></a></h1>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="shopping-item">
          <a href="cart.php">
            <span class="cart-amunt">
              <?php $header->getTotal(); ?>
            </span> 
            <i class="fa fa-shopping-cart"></i> <span class="product-count">
              <?php $header->getItens() ?>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div> <!-- End site branding area -->

<div class="mainmenu-area">
  <div class="container">
    <div class="row">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div> 
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">Sobre nós</a></li>
          <li><a href="shop.php">Produtos</a></li>
          <li><a href="cart.php">Carrinho</a></li>
          <li><a href="register.php">Cadastre-se</a></li>
          <li><a href="contact.php">Contato</a></li>
        </ul>
      </div>  
    </div>
  </div>
</div> <!-- End mainmenu area -->
