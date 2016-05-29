<?php
  function delete( $id ){
    include 'product.php';
    $db = new Product;
    $db->delete( $id );
  }

  delete( $_GET['id'] );
?>