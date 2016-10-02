<?php
  function login(){
    include '../models/DatabaseModel.php';
    $db = new Database;
    $db->login();
  }

  login();
?>