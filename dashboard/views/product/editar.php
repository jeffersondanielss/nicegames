<?php 
  $title = "NG - Editar Produto";
  include_once '../../../config.php';
  inc('dashboard/views/header');
?>

<body>

    <div id="wrapper">

        <?php inc('dashboard/views/navbar'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Editar
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                      <?php inc('dashboard/views/product/form-editar'); ?>
                    </div>
                    
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php inc('dashboard/views/footer'); ?>
