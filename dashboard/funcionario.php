<?php 
  $title = "NG - Funcionários";
  include 'partials/header.php';
  include 'functions/database.php';
  include 'functions/product/product.php';
  include 'functions/employe/employe.php';
  include 'functions/client/client.php';
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
                            Funcionários
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Funcionários</h3>
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
                                            <?php $employe->Wrapperlist( $employe->readAll() ); ?>
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
