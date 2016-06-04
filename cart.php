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
        <div class="col-md-12">
          <div class="product-content-right">
            <div class="woocommerce">

              <table cellspacing="0" border="1" class="shop_table cart">
                <thead>
                  <tr>
                    <th class="product-name">Produtos</th>
                    <th class="product-price">Preço</th>
                    <th class="product-subtotal">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $buy->showCart(); ?>
                  <tr>
                    <td class="actions" colspan="2">
                      <?php
                        $currUser = $client->getLoggedUser();
                      ?>
                      <a href="dashboard/functions/buy/purchase.php?id=<?php echo $currUser[0]['id']; ?>"class="add_to_cart_button">Finalizar compra</a>
                    </td>
                    <td><?php $buy->buyTotal();?></td>
                  </tr>
                </tbody>
              </table>

              <?php include 'dashboard/partials/message.php'; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include 'partials/footer.php' ?>