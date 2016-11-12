<?php
  get_file('controllers/GetAllController');
  $getAllCtrl = new GetAllController();
  $employes = $getAllCtrl->getAll('funcionario');

  foreach ($employes as $employe) { ?>
    
   <tr>
    <td><?php echo $employe['id']; ?></td>
    <td><?php echo $employe['nome']; ?></td>
    <td><?php echo $employe['email']; ?></td>
    <td>
        <a class="icon-table" href="./views/employe/editar.php?id=<?php echo $employe['id']; ?>">
            <i class="glyphicon glyphicon-pencil"></i>
        </a>
    </td>
    <td>
      <a class="icon-table" href="./../controllers/employe/DeleteController.php?id=<?php echo $employe['id']; ?>">
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