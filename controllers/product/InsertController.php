<?php
  function insert() {
    include '../CRUD.php';
    include 'product.php';
    $db = new Product;
    $db->insert();
  }

  insert();
?>