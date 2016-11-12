<?php
  include_once "../../config.php";
  get_file("models/models");

  function RegisterController() {
    $productCtrl = new Product();
    $productCtrl->insert();
  }

  RegisterController();
?>