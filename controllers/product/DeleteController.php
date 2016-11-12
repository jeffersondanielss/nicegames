<?php

  include_once "../../config.php";
  get_file("models/models");

  function delete( $id ){
    $productCtrl = new Product();
    $productCtrl->delete( $id, 'produto', 'dashboard/product' );
  }

  delete( $_GET['id'] );

?>