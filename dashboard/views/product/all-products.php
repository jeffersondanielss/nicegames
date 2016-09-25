<?php
  $array = $product->readAll('produto');

  foreach ($array as $value) { ?>
    <tr>
      <td><?php echo $value['id']; ?></td>
      <td><img src="../upload/<?php echo $value['image']; ?>" width="30"></td>
      <td><?php echo $value['titulo']; ?></td>
      <td><?php echo $value['genero']; ?></td>
      <td> R$<?php echo $value['preco']; ?></td>
      <td><?php echo $value['lancamento']; ?></td>
      <td><?php echo $value['audio']; ?></td>
      <td><?php echo $value['legenda']; ?></td>
      <td><?php echo $value['tamanho']; ?></td>
      <td><?php echo $value['quantidade']; ?></td>
      <td>
        <a class="icon-table" href="./views/product/editar.php?id=<?php echo $value['id']; ?>">
          <i class="glyphicon glyphicon-pencil"></i>
        </a>
      </td>
      <td>
       <a class="icon-table" href="./functions/product/delete.php?id=<?php echo $value['id']; ?>">
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