<?php
  function addCart( $id ){
    include '../CRUD.php';
    include '../client/client.php';
    include '../employe/employe.php';
    include 'buy.php';
    $buy = new Buy;
    $buy->addCart( $id );

    header("Location: ../../../cart.php");
  }

  addCart( $_GET['id'] );
?>