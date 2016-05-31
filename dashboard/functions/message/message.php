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
      header("Location: ../../../index.php?message={$message}");
    }

    public function allMessages() {
      $db = new Database;
      $pdo = $db->connect();
      $busca = $pdo->prepare("SELECT * FROM mensagem");
      $busca->execute();

      $linha = $busca->fetchAll(PDO::FETCH_ASSOC);

      foreach ($linha as $value) {
        $line = '<div class="panel-heading" role="tab" id="headingOne">';
        $line .=   '<h4 class="panel-title">';
        $line .=     '<a role="button" data-toggle="collapse" data-parent="#accordion" href="#'. $value['id'] .'" aria-expanded="true" aria-controls="' . $value['id'] . '">';
        $line .=       '<i class="glyphicon glyphicon-envelope"></i>  ' . $value['nome'];
        $line .=      '<i class="glyphicon glyphicon-plus pull-right"></i>';
        $line .=    '</a>';
        $line .=  '</h4>';
        $line .='</div>';
        $line .='<div id="' . $value['id'] . '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">';
        $line .=  '<div class="panel-body">';
        $line .=    '<p> <strong>De: </strong>' . $value['email'];
        $line .=      '<a href="./functions/message/delete.php?id='. $value['id'] .'" class="glyphicon glyphicon-trash pull-right"></a>';
        $line .=    '</p>';
        $line .=    '<h3>Mensagem</h3>';
        $line .=    '<p>' . $value['mensagem'] .'</p>';
        $line .=  '</div>';
        $line .='</div>';
        echo $line;
      }
    }

  }

  $message = new Message;

?>