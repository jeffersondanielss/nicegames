<?php
  function insert() {
    include 'product.php';
    $db = new Product;
    $db->insert();
  }

  insert();
?>