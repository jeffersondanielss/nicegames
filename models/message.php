<?php

  /*
  * Author Jeferson Daniel
  * Version 1.0.0
  * CRUD PDO
  */

  class Message extends CRUD {

    public function insert() {
      include '../database.php';
      $db = new Database;
      $pdo = $db->connect();

      $nome =      $_POST['nome'];
      $email =     $_POST['email'];
      $mensagem =  $_POST['mensagem'];

      $sql = $pdo->prepare("INSERT INTO mensagem(nome, email, mensagem)VALUES(:nome, :email, :mensagem)");

      $sql->bindValue(':nome',      $nome);
      $sql->bindValue(':email',     $email);
      $sql->bindValue(':mensagem',     $mensagem);
      $sql->execute();

      $message = 'Mensagem enviada com sucesso!';
      header("Location: ../../../contact.php?message={$message}");
    }

  }

  $message = new Message;

?>