<?php

  function addCart(){
    include '../../models/models.php';

    $productId = $_GET['id'];
    $buy = new Buy();
    $buy->addCart( $productId );

    header("Location: ../../cart.php");
  }
  
  addCart();
?>