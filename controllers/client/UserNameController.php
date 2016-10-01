<?php
  include_once 'models/models.php';

  function getUserName() {
    $client = new Client;
    echo $client->loggedUserName();
  }
?>