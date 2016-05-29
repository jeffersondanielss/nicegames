<?php
  function insert() {
    include 'client.php';
    $db = new Client;
    $db->insert();
  }

  insert();
?>