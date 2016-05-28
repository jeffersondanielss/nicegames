<?php
  function insert() {
    include 'database.php';
    $db = new Database;
    $db->insert();
  }

  insert();
?>