<?php
  get_file('controllers/GetByIdController');
  $supportCtrl = new GetByIdController();
  $supportArray = $supportCtrl->getById($_GET['id'], 'supportmessage');
  $supportMessage = $supportArray[0];
?>

<form class="form-horizontal" action="../controllers/support/ResponseController.php" method="post" enctype="multipart/form-data">

  <div class="form-group invisible">
    <label class="col-sm-3 control-label">id</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="id" placeholder="id" required value="<?php echo $supportMessage['id'];?>">
    </div>
  </div>

  <div class="form-group">
  <label class="col-sm-3 control-label">Chamado</label>
    <div class="col-sm-9">
    
      <label class="col-sm-3">cliente: </label>
      <p><?php echo $supportMessage['email_cliente']; ?></p>
      <label class="col-sm-3">Mensagem: </label>
      <p><?php echo $supportMessage['message']; ?></p>

    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Resposta</label>
    <div class="col-sm-9">
      <textarea class="form-control" name="response" rows="10" required></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>
  </div>

</form>