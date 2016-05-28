<?php
  function delete( $id ){
    include 'database.php';
    $db = new Database;
    $db->delete( $id );
  }

  delete( $_GET['id'] );
?>