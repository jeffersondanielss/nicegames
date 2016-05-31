<?php
  function delete( $id ){
    include '../CRUD.php';
    include 'message.php';
    $db = new Message;
    $db->delete( $id, 'mensagem', 'message' );
  }

  delete( $_GET['id'] );
?>