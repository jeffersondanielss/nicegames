<?php

  class CRUD {

    public function delete( $id, $table, $redirectPage ) {
      include '../database.php';
      echo "<script>confirm('Tem certeza que deseja apagar esse registro?')</script>";
      $db = new Database;
      $pdo = $db->connect();
      $sql = $pdo->prepare("DELETE FROM $table WHERE id=:id");
      $sql->bindValue(':id', $id);
      $sql->execute();

      $message = 'Produto excluido com sucesso!';
      header("Location: ../../" . $redirectPage . ".php?message={$message}");
    }

    public function count( $table ) {
      $db = new Database;
      $pdo = $db->connect();
      $busca = $pdo->prepare("SELECT count(*) as total FROM $table");
      $busca->execute();
      $result = $busca->fetchColumn();
      echo $result;
    }

    // Lista todos usuários cadatrados
    public function readAll( $table ) {
      $db = new Database;
      $pdo = $db->connect();
      $busca = $pdo->prepare("SELECT * FROM $table");
      $busca->execute();

      $linha = $busca->fetchAll(PDO::FETCH_ASSOC);

      return $linha;
    }

    public function getById( $id, $table ) {
      $db = new Database;
      $pdo = $db->connect();
      $busca = $pdo->prepare("SELECT * FROM $table WHERE ID = :id");
      $busca->bindValue(':id', $id);
      $busca->execute();

      return $busca->fetchAll(PDO::FETCH_ASSOC);
    }
  
  }

?>