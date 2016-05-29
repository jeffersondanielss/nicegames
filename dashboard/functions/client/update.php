<?php
  function update(){
    include 'client.php';
    $db = new Client;
    $db->update();
  }

  update();
?>