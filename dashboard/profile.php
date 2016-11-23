<?php 
  $title = "NG - Perfil";
  include_once '../config.php';
  include_once 'views/header.php';
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
                  <h1 class="page-header"> Perfil </h1>
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
                                  <?php include 'views/employe/user-head.php'; ?>
                                </tr>
                            </thead>
                            <tbody>
                              <?php include 'views/employe/current-employe.php'; ?>
                            </tbody>
                        </table>
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

<?php include 'views/footer.php'; ?>
