<?php
  include_once "../../config.php";
  get_file("models/models");

  function updateController(){
    $employe = new Employe();
    $employe->update();
  }

  updateController();
?>
