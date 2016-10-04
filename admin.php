<?php
  $title = 'NG - Login';
  include_once('dashboard/views/header.php');
?>

  <body>

    <div class="jumbotron text-center">
      <h1><img src="../img/ng-logo.png" alt=""></h1> 
      <p>STORE</p> 
      <form class="form-inline" action="../controllers/LoginController.php" method="post">
        <div class="form-group">
          <label class="sr-only">Email</label>
          <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
          <label class="sr-only">Senha</label>
          <input type="password" class="form-control" name="senha" placeholder="Senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>
    </div>
  
<?php include_once('dashboard/views/footer.php'); ?>