<?php
  function insert() {
    include '../CRUD.php';
    include 'employe.php';
    $db = new Employe;
    $db->insert();
  }

  insert();
?>