<?php
  function insert() {
    include '../CRUD.php';
    include 'client.php';
    $db = new Client;
    $db->insert();
  }

  insert();
?>