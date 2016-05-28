<form class="form-horizontal" action="functions/insert.php" method="post">

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
    <label class="col-sm-3 control-label">Endereço</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="endereco" placeholder="Endereço" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Telefone</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="telefone" placeholder="Telefone" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">RG</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="rg" placeholder="RG" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">CPF</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="cpf" placeholder="CPF" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Genero</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="genero" placeholder="Genero" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Data nascimento</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="nascimento" placeholder="Data de nascimento" required>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <div class="checkbox">
        <label>
          <input type="checkbox" required> Aceitar termos de uso
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
  </div>

</form>