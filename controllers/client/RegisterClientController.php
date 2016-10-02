<?php
  function RegisterClientController() {
    include '../../models/models.php';
    $ClientCtrl = new Client;
    $ClientCtrl->insert();
  }

  RegisterClientController();
?>