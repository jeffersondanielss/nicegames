<?php
  include_once "../../config.php";
  get_file("models/models");

  function ResponseController() {
    $responseCtrl = new Support();
    $responseCtrl->insert();
  }

  ResponseController();
?>