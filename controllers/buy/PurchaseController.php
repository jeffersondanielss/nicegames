<?php
  function purchase( $id ){
    include '../CRUD.php';
    include '../client/client.php';
    include 'buy.php';
    $buy = new Buy;
    $buy->purchase( $id );

    $message = 'Produto(s) comprado(s) com sucesso, obrigado pela preferência!';
    header("Location: ../../../cart.php?message={$message}");
  }

  purchase( $_GET['id'] );
?>