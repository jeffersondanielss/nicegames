<?php 
  $title = "NG - Suporte";
  $page = "employe";
  include_once '../config.php';
  include 'views/header.php';
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
              Suporte
            </h1>
          </div>
        </div>
        <!-- /.row -->

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">

            <?php include 'views/message/all-support.php'; ?>

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