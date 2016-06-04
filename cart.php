<?php 
  $title = 'NG - Carrinho';
  include 'partials/head.php';
  include 'dashboard/functions/functions.php';
  session_start();
?>
<body>

  <?php include 'partials/header.php'; ?>

  <div class="product-big-title-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="product-bit-title text-center">
            <h2>Carrinho</h2>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- End Page title area -->


  <div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
      <div class="row">

<?php
 
  var_dump( $buy->getBuyProducts());
?>
        <div class="col-md-12">
          <div class="product-content-right">
            <div class="woocommerce">
              <form method="post" action="#">
                <table cellspacing="0" border="1" class="shop_table cart">
                  <thead>
                    <tr>
                      <th class="product-remove">&nbsp;</th>
                      <th class="product-name">Produto</th>
                      <th class="product-price">Preço</th>
                      <th class="product-subtotal">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $buy->showCart(); ?>
                    <tr>
                      <td class="actions" colspan="3">
                        <input type="submit" value="Finalizar compra" name="concluir" class="checkout-button button alt wc-forward">
                      </td>
                      <td><?php $buy->buyTotal();?></td>
                    </tr>
                  </tbody>
                </table>
              </form>

              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include 'partials/footer.php' ?>