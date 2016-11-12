<?php
  include_once "../../config.php";
  get_file("models/models");

  function RegisterController() {
    $employeCtrl = new Employe();
    $employeCtrl->insert();
  }

  RegisterController();
?>