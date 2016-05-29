<form class="form-horizontal" action="../../functions/product/insert.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label class="col-sm-3 control-label">id</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="id" placeholder="id" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">titulo</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="titulo" placeholder="titulo" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">genero</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="genero" placeholder="genero" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">preço</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="preco" placeholder="Preço">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">lancamento</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="lancamento" placeholder="lancamento">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">audio</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="audio" placeholder="audio" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">legenda</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="legenda" placeholder="legenda" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">tamanho</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="tamanho" placeholder="tamanho">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Quantidade</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="quantidade" placeholder="Quantidade">
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
      <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
  </div>

</form>