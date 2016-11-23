<?php
  include_once "../../config.php";
  get_file("models/models");

  function updateController(){
    $client = new Client();
    $client->update();
  }

  updateController();
?>
