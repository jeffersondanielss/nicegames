<?php
  function delete( $id ){
    include 'client.php';
    $db = new Client;
    $db->delete( $id );
  }

  delete( $_GET['id'] );
?>