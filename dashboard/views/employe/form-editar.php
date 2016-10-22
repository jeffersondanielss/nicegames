<?php
  get_file('controllers/GetByIdController');
  $employeCtrl = new GetByIdController();
  $employeArray = $employeCtrl->getById($_GET['id'], 'funcionario');
  $employeEdit = $employeArray[0];
?>

<form class="form-horizontal" action="functions/employe/update.php" method="post" enctype="multipart/form-data">

  <div class="form-group invisible">
    <label class="col-sm-3 control-label">id</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="id" placeholder="id" value="<?php echo $employeEdit['id']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">nome</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="nome" placeholder="nome" value="<?php echo $employeEdit['nome']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">email</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $employeEdit['email']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">senha</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" name="senha" placeholder="senha">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-success">Atualizar</button>
    </div>
  </div>

</form>