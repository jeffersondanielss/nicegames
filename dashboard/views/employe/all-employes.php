<?php
  $employes = $employe->readAll('funcionario');

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
      <a class="icon-table" href="./functions/employe/delete.php?id=<?php echo $employe['id']; ?>">
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