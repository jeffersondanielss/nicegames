<?php
  function update(){
    include '../CRUD.php';
    include 'client.php';
    $db = new Client;
    $db->update();
  }

  update();
?>