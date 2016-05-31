<?php 
$title = "NG - Produtos";
include 'partials/header.php';
include 'functions/functions.php';
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
              Produtos
            </h1>
          </div>
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Produtos</h3>
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
                      <?php $product->Wrapperlist( $product->readAll('produto'), false ); ?>
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
