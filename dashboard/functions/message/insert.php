<?php
  function insert() {
    include '../CRUD.php';
    include 'message.php';
    $db = new Message;
    $db->insert();
  }

  insert();
?>