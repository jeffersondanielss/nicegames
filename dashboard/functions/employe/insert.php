<?php
  function insert() {
    include 'employe.php';
    $db = new Employe;
    $db->insert();
  }

  insert();
?>