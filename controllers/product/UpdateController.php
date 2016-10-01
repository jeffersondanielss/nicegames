<?php
  function update(){
    include '../CRUD.php';
    include 'product.php';
    $db = new Product;
    $db->update();
  }

  update();
?>