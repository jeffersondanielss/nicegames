<?php 
  $title = "NG - Funcionários";
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
              Mensagens <span class="badge"><?php $count->allItens('mensagem'); ?></span>
            </h1>
          </div>
        </div>
        <!-- /.row -->
      
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">

            <?php include 'views/message/all-messages.php'; ?>

          </div>

          </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

<?php include 'views/footer.php'; ?>