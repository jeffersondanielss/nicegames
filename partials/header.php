<div class="header-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
          if( empty($_SESSION['email']) || empty($_SESSION['senha']) ){
            include 'partials/login.php';
          } else {
            include 'partials/welcome.php';
          }
        ?>
      </div>

    </div>
  </div>
</div> <!-- End header area -->

<div class="site-branding-area">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="logo">
          <h1><a href="./"><img src="ng-logo.png"></a></h1>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="shopping-item">
          <a href="cart.php">R$ <span class="cart-amunt"><?php $buy->buyTotal();?></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php $buy->count('buy'); ?></span></a>
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
          <li><a href="#">Contato</a></li>
        </ul>
      </div>  
    </div>
  </div>
</div> <!-- End mainmenu area -->