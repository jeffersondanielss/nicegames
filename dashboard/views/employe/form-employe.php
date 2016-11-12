<form class="form-horizontal" action="../controllers/employe/RegisterController.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label class="col-sm-3 control-label">Nome</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="nome" placeholder="Nome" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Email</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" name="email" placeholder="Email" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Senha</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" name="senha" placeholder="senha" required>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
  </div>

</form>