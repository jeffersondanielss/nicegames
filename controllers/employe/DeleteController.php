<?php

  include_once "../../config.php";
  get_file("models/models");

  function delete( $id ){
    $employeCtrl = new Employe();
    $employeCtrl->delete( $id, 'funcionario', 'dashboard/employe' );
  }

  delete( $_GET['id'] );

?>