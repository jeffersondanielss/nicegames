<?php 
  $title = "NG - Cadastro de produto";
  include '../header.php';
  include '../../functions/functions.php';
?>

<body>

    <div id="wrapper">

        <?php include '../navbar.php'; ?>

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
                      <?php include 'form-product.php'; ?>
                    </div>
                    
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include '../footer.php'; ?>
