<?php
  inc('controllers/GetAllController');
  $getAllCtrl = new GetAllController();
  $products = $getAllCtrl->getAll('produto');

  foreach ($products as $product) { ?>
    <tr>
      <td><?php echo $product['id']; ?></td>
      <td><img src="../upload/<?php echo $product['image']; ?>" width="30"></td>
      <td><?php echo $product['titulo']; ?></td>
      <td><?php echo $product['genero']; ?></td>
      <td> R$<?php echo $product['preco']; ?></td>
      <td><?php echo $product['lancamento']; ?></td>
      <td><?php echo $product['audio']; ?></td>
      <td><?php echo $product['legenda']; ?></td>
      <td><?php echo $product['tamanho']; ?></td>
      <td><?php echo $product['quantidade']; ?></td>
      <td>
        <a class="icon-table" href="./views/product/editar.php?id=<?php echo $product['id']; ?>">
          <i class="glyphicon glyphicon-pencil"></i>
        </a>
      </td>
      <td>
       <a class="icon-table" href="./functions/product/delete.php?id=<?php echo $product['id']; ?>">
          <i class="glyphicon glyphicon-trash"></i>
       </a>
      </td> 
    </tr>
      
<?php

  if($page == 'home') {
    break;
  }

  }

?>