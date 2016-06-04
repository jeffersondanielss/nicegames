<?php
  function addCart( $id ){
    include '../CRUD.php';
    include '../client/client.php';
    include 'buy.php';
    $buy = new Buy;
    $buy->addCart( $id );
    var_dump($id);
  }

  addCart( $_GET['id'] );
?>