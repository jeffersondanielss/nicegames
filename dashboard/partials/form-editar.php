<?php $userEdit = $db->getById( $_GET['id'] ); ?>

<form class="form-horizontal" action="functions/update.php" method="post">

  <div class="form-group hidden">
    <div class="col-sm-9">
      <input type="text" name="ID" value="<?php echo $userEdit[0]['ID']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Nome</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $userEdit[0]['nome']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Email</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $userEdit[0]['email']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Senha</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" name="senha" placeholder="senha">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Endereço</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="endereco" placeholder="Endereço" value="<?php echo $userEdit[0]['endereco']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Telefone</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="telefone" placeholder="Telefone" value="<?php echo $userEdit[0]['telefone']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">RG</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="rg" placeholder="RG" value="<?php echo $userEdit[0]['rg']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">CPF</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="cpf" placeholder="CPF" value="<?php echo $userEdit[0]['cpf']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Genero</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="genero" placeholder="Genero" value="<?php echo $userEdit[0]['genero']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Data nascimento</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="nascimento" placeholder="Data de nascimento" value="<?php echo $userEdit[0]['nascimento']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Data nascimento</label>
    <div class="col-sm-9">
      <select class="form-control" name="bloqueado">
        <option value="1">Bloquear</option>
        <option value="0">Desbloquear</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-success">Atualizar</button>
    </div>
  </div>

</form>