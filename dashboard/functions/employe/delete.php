<?php
  function delete( $id ){
    include '../CRUD.php';
    include 'employe.php';
    $db = new Employe;
    $db->delete( $id, 'funcionario', 'employe' );
  }

  delete( $_GET['id'] );
?>