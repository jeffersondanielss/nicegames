<?php

  include_once "../../config.php";
  get_file("models/models");

  function delete( $id ){
    $clienttrl = new Client();
    $clientCtrl->delete( $id, 'cliente', 'dashboard/client' );
  }

  delete( $_GET['id'] );

?>
