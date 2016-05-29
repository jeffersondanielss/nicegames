<?php
  function delete( $id ){
    include 'employe.php';
    $db = new Employe;
    $db->delete( $id );
  }

  delete( $_GET['id'] );
?>