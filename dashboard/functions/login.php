<?php
  function login(){
    include 'database.php';
    $db = new Database;
    $db->login();
  }

  login();
?>