<?php 
  $title = "Nicegames - admin";
  $page = 'home';
  include_once '../config.php';
  include_once 'views/header.php';
  get_file('controllers/CountController');
  $count = new CountController();
?>

<body>

  <div id="wrapper">

    <!-- Navigation -->
    <?php include 'views/navbar.php'; ?>

    <div id="page-wrapper">

      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">
              Painel <small>visão geral</small>
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
                    <div class="huge"><?php $count->allItens('produto'); ?></div>
                    <div>Número de produtos</div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Produtos</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <?php include 'views/product/user-head.php'; ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php include 'views/product/all-products.php'; ?>
                    </tbody>
                  </table>
                  <a href="./product.php">
                    Ver todos produtos <i class="fa fa-arrow-circle-right"></i>
                  </a>

                </div>
              </div>
            </div>

          </div><!-- /.product -->

          <div class="col-lg-4 col-md-6">
            <div class="panel panel-red">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-ban fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge"><?php $count->allItens('cliente'); ?></div>
                    <div>Clientes</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel panel-red">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Clientes</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <?php include 'views/client/user-head.php'; ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php include 'views/client/all-clients.php'; ?>
                    </tbody>
                  </table>
                  <a href="./client.php">
                    Ver todos clientes <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
            </div>

          </div> <!-- /.Client -->

          <div class="col-lg-4 col-md-6">
            <div class="panel panel-green">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-user fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge"><?php $count->allItens('funcionario'); ?></div>
                    <div>Funcionários</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel panel-green">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Funcionários</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <?php include 'views/employe/user-head.php'; ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php include 'views/employe/all-employes.php'; ?>
                    </tbody>
                  </table>
                  <a href="./employe.php">
                    Ver todos funcionários <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
            </div>

          </div> <!-- /.employe -->
          <div class="col-md-12">
            <?php include 'views/message.php'; ?>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php include 'views/footer.php'; ?>
