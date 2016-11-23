<?php
  get_file('controllers/employe/CurrentController');
  $current = new CurrentController();
  $employeArray = $current->getCurrentEmploye();

  foreach ($employeArray as $employe) { ?>
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
        <a class="icon-table">
           <i class="glyphicon glyphicon-trash disabled"></i>
        </a>
      </td> 
    </tr>

  <?php }
?>