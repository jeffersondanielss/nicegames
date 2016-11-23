<?php
  get_file('controllers/GetAllController');
  $getAllCtrl = new GetAllController();
  $clients = $getAllCtrl->getAll('cliente');

  foreach ($clients as $client) { ?>
    
    <tr>
      <td><?php echo $client['id']; ?></td>
      <td><?php echo $client['nome']; ?></td>
      <td><?php echo $client['sobrenome']; ?></td>
      <td><?php echo $client['email']; ?></td>
      <td><?php echo $client['endereco']; ?></td>
      <td><?php echo $client['cidade']; ?></td>
      <td><?php echo $client['cpf']; ?></td>
      <td><?php echo $client['cep']; ?></td>
      <td><?php echo $client['telefone']; ?></td>
      <td>
        <a class="icon-table" href="./views/client/editar.php?id=<?php echo $client['id']; ?>">
          <i class="glyphicon glyphicon-pencil"></i>
        </a>
      </td>
     <td>
       <a class="icon-table" href="../controllers/client/DeleteController.php?id=<?php echo $client['id']; ?>">
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