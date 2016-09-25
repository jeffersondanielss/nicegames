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
      $dadosProduto = $buy->getBuyProducts();
      foreach ($dadosProduto as $value) {
        foreach ($value as $val) { ?>

          <tr class="cart_item">
           <td class="product-name">
             <?php echo $val['titulo']; ?>
           </td>

           <td class="product-price">
             <span class="amount">R$ <?php echo $val['preco']; ?> </span> 
           </td>
           <td class="product-remove">&nbsp;</td>
         </tr>

        <?php
        }
      }
    ?>
    <tr>
      <td class="actions" colspan="2">
        <a href="dashboard/functions/buy/purchase.php?id=<?php echo $currUser[0]['id']; ?>"class="add_to_cart_button">Finalizar compra</a>
      </td>
      <td><?php $buy->buyTotal();?></td>
    </tr>
  </tbody>
</table>