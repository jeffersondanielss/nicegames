<?php
  function delete( $id ){
    include '../CRUD.php';
    include 'client.php';
    $db = new Client;
    $db->delete( $id, 'cliente', 'client' );
  }

  delete( $_GET['id'] );
?>