<?php

  include_once "../../config.php";
  get_file("models/models");

  function delete( $id ){
    $messageCtrl = new Message();
    $messageCtrl->delete( $id, 'mensagem', 'dashboard/message' );
  }

  delete( $_GET['id'] );

?>