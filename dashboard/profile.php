<?php 
  $title = "LHM - Perfil";
  include 'partials/header.php';
  include 'functions/database.php';
  include 'functions/employe/employe.php';
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
                      Perfil: <small><?php echo $employe->loggedUserName(); ?></small>

                  </h1>
              </div>
          </div>
          <!-- /.row -->

          <div class="row">
              <div class="col-lg-6 col-md-6">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          <div class="row">
                              <div class="col-xs-3">
                                  <i class="fa fa-shopping-cart fa-5x"></i>
                              </div>
                              <div class="col-xs-9 text-right">
                                  <div class="huge">R$ 26</div>
                                  <div>Créditos!</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-6 col-md-6">
                  <div class="panel panel-green">
                      <div class="panel-heading">
                          <div class="row">
                              <div class="col-xs-3">
                                  <i class="fa fa-comments fa-5x"></i>
                              </div>
                              <div class="col-xs-9 text-right">
                                  <div class="huge">26/02</div>
                                  <div>Aniversário!</div>
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
                    <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Perfil</h3>
                  </div>
                  <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                  <?php include 'partials/employe/user-head.php'; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $employe->wrapperList( $employe->getLoggeduser() ); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right">
                        <a href="./">Ver todos usuários <i class="fa fa-arrow-circle-right"></i></a>
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
