<?php
  include_once "../../config.php";
  get_file("models/models");

  function RegisterClientController() {
    $ClientCtrl = new Client();
    $ClientCtrl->insert();
  }

  RegisterClientController();
?>