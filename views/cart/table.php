<?php
  include_once('controllers/buy/PurchasesController.php');
  $PurchasesCtrl = new PurchasesController();
  $purchases = $PurchasesCtrl->getPurchases();
  $currUser = $PurchasesCtrl->getLoggedUser();
?>

<table cellspacing="0" border="1" class="shop_table cart">
  <thead>
    <tr>
      <th class="product-name">Produtos</th>
      <th class="product-price">Preço</th>
      <th class="product-subtotal">Total</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($purchases as $purchase) {
        foreach ($purchase as $product) { ?>

          <tr class="cart_item">
           <td class="product-name">
             <?php echo $product['titulo']; ?>
           </td>

           <td class="product-price">
             <span class="amount">R$ <?php echo $product['preco']; ?> </span> 
           </td>
           <td class="product-remove">&nbsp;</td>
         </tr>

        <?php
        }
      }
    ?>
    <tr>
      <td class="actions" colspan="2">
        <a href="controllers/buy/PurchaseController.php?id=<?php echo $currUser[0]['id']; ?>" class="add_to_cart_button">Finalizar compra</a>
      </td>
      <td><?php $PurchasesCtrl->getTotal();?></td>
    </tr>
  </tbody>
</table>