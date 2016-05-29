<?php 
  $title = "Nice games Store";
  include 'partials/header.php';
  include 'functions/database.php';
  include 'functions/product/product.php';
  include 'functions/employe/employe.php';
  include 'functions/client/client.php';
?>

<body>

  <div id="wrapper">

    <!-- Navigation -->
    <?php include 'partials/navbar.php'; ?>

    <div id="page-wrapper">

      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">
              Painel <small>Todos produtos</small>
            </h1>
          </div>
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-users fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge"><?php $product->count(); ?></div>
                    <div>Número de produtos</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="panel panel-red">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-ban fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge"><?php $employe->count(); ?></div>
                    <div>Clientes</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="panel panel-green">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-user fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge"><?php $client->count(); ?></div>
                    <div>Funcionários</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Usuários</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <?php include 'partials/product/user-head.php'; ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $product->wrapperList( $product->readAll() ); ?>
                    </tbody>
                  </table>

                  <?php include 'partials/message.php'; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php include 'partials/footer.php'; ?>
