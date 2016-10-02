<?php 
  $title = 'NG - Cadastro';
  include_once 'views/head.php';
?>
<body>

  <?php include_once 'views/header.php'; ?>

  <header>
    <h2 class="big-title">Cadastre-se</h2>
  </header>


  <div class="container">
    <div class="well well-sm form-contact">
      <form class="form-horizontal" action="controllers/client/RegisterClientController.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label class="col-sm-3 control-label">Nome</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="nome" placeholder="Nome" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">Sobrenome</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" required>
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
            <input type="text" class="form-control" name="endereco" placeholder="Endereço">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">cidade</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="cidade" placeholder="cidade" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">CPF</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="cpf" maxlength="11" minlength="11" placeholder="CPF" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">cep</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="cep" maxlength="8" minlength="8" placeholder="cep">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label">Telefone</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="telefone" minlength="9" placeholder="Telefone">
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
    </div>
  </div>

<?php include_once 'views/footer.php'; ?>