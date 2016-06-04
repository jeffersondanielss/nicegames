<?php 
$title = 'NG - Contato';
include 'partials/head.php';
include 'dashboard/functions/functions.php';
session_start();
?>
<body>

  <?php include 'partials/header.php'; ?>

  <div class="product-big-title-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="product-bit-title text-center">
            <h2>Fale Conosco</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="well well-sm form-contact">
          <form class="form-horizontal text-center" action="dashboard/functions/message/insert.php" method="post">
            <fieldset>

              <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center">
                  <i class="fa fa-user bigicon"></i>
                </span>
                <div class="col-md-8">
                  <input name="nome" type="text" placeholder="Nome" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center">
                  <i class="fa fa-envelope-o bigicon"></i>
                </span>
                <div class="col-md-8">
                  <input name="email" type="email" placeholder="Endereço de Email" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center">
                  <i class="fa fa-pencil-square-o bigicon"></i>
                </span>
                <div class="col-md-8">
                  <textarea class="form-control" name="mensagem" placeholder="Introduza a sua mensagem para nós aqui. Nós entraremos em contato com você dentro de 2 dias úteis." rows="7"></textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>

        <?php include 'dashboard/partials/message.php'; ?>
      </div>
    </div>
  </div>

<?php include 'partials/footer.php'; ?>