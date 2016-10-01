<?php
  function login(){
    include '../models/database.php';
    $db = new Database;
    $db->login();
  }

  login();
?>