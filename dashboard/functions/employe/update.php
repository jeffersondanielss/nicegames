<?php
  function update(){
    include 'employe.php';
    $db = new Employe;
    $db->update();
  }

  update();
?>