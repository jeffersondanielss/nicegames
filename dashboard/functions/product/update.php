<?php
  function update(){
    include 'product.php';
    $db = new Product;
    $db->update();
  }

  update();
?>