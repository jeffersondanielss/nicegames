<?php

  /**
  * SupportModel.php
  * @author Jefferson Daniel <jeffersondanielss@gmail.com>
  */

  /**
  * Classe Support
  */

  class Support extends CRUD {

    /**
    * Inseri um registro na tabela de mensagens.
    * 
    * @return void
    */

    public function insert() {
      $pdo = parent::connect();

      $id_message = $_POST['id'];
      $response   = $_POST['response'];

      $sql = $pdo->prepare("INSERT INTO responsesupport(id_message, response)VALUES(:id_message, :response)");

      $sql->bindValue(':id_message', $id_message);
      $sql->bindValue(':response',   $response);
      $sql->execute();

      $message = 'Chamado respondido com sucesso!';
      header("Location: ../../dashboard/index.php?message={$message}");
    }

  }

?>