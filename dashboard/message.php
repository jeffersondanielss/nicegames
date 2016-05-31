<?php 
$title = "NG - Funcionários";
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
              Mensagens <span class="badge"><?php $message->count('mensagem'); ?></span>
            </h1>
          </div>
        </div>
        <!-- /.row -->
      
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">

            <?php $message->allmessages(); ?>

          </div>

          </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

<?php include 'partials/footer.php'; ?>