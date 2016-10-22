<?php
  inc('controllers/GetByIdController');
  $ProductCtrl = new GetByIdController();
  $productArray = $ProductCtrl->getById($_GET['id'], 'produto');
  $productEdit = $productArray[0];
?>

<form class="form-horizontal" action="functions/product/update.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label class="col-sm-3 control-label">id</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="id" placeholder="id" value="<?php echo $productEdit['id']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">titulo</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="titulo" placeholder="titulo" value="<?php echo $productEdit['titulo']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">genero</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="genero" placeholder="genero" value="<?php echo $productEdit['genero']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">preço</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="preco" placeholder="Preço" value="<?php echo $productEdit['preco']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">lancamento</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="lancamento" placeholder="lancamento" value="<?php echo $productEdit['lancamento']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">audio</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="audio" placeholder="audio" value="<?php echo $productEdit['audio']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">legenda</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="legenda" placeholder="legenda" value="<?php echo $productEdit['legenda']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">tamanho</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="tamanho" placeholder="tamanho" value="<?php echo $productEdit['tamanho']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Quantidade</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="quantidade" placeholder="Quantidade" value="<?php echo $productEdit['quantidade']; ?>">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <label>Imagem do produto</label>
      <input type="file" name="image">
      <p class="help-block">Apenas arquivos jpg/png de até 1MB.</p>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-success">Atualizar</button>
    </div>
  </div>

</form>