<?php
  function delete( $id ){
    include '../CRUD.php';
    include 'product.php';
    $db = new Product;
    $db->delete( $id, 'produto', 'index' );
  }

  delete( $_GET['id'] );
?>