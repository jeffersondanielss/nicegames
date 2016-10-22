<?php 
  $title = "NG - Cadastro de produto";
  include_once '../../../config.php';
  include_once('../header.php');
?>

<body>

    <div id="wrapper">

        <?php get_file('dashboard/views/navbar'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Cadastro de Produto
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                      <?php get_file('dashboard/views/product/form-product'); ?>
                    </div>
                    
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php get_file('dashboard/views/footer'); ?>
