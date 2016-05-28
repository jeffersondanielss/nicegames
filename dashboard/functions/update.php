<?php
  function update(){
    include 'database.php';
    $db = new Database;
    $db->update();
  }

  update();
?>