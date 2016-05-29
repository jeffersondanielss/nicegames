<?php
  function update(){
    include '../CRUD.php';
    include 'employe.php';
    $db = new Employe;
    $db->update();
  }

  update();
?>