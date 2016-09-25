<?php

  /*
  * Author Jeferson Daniel
  * Version 1.0.0
  * CRUD PDO
  */

  class Employe extends CRUD {

    // Cadastro no banco
    public function insert() {
      include '../database.php';
      $db = new Database;
      $pdo = $db->connect();

      $nome =      $_POST['nome'];
      $email =     $_POST['email'];
      $senha =     md5($_POST['senha']);

      $validar = $pdo->prepare("SELECT * FROM funcionario WHERE email=:email");
      $validar->bindValue(':email', $email);
      $validar->execute();

      if( $validar->rowCount() == 0 ):
        $sql = $pdo->prepare("INSERT INTO funcionario(nome, email, senha)VALUES(:nome, :email, :senha)");

        $sql->bindValue(':nome',      $nome);
        $sql->bindValue(':email',     $email);
        $sql->bindValue(':senha',     $senha);

        $sql->execute();
        $message = 'Cadastro realizado com sucesso!';
        header("Location: ../../employe.php?message={$message}");
      else:
        $message = 'Já existe um funcionario com este id!';
        header("Location: ../../employe.php?message={$message}");
      endif;
    }


    // Atualizar usuário
    public function update() {
      include '../database.php';
      $db = new Database;
      $pdo = $db->connect();

      $id =        $_POST['id'];
      $nome =      $_POST['nome'];
      $email =     $_POST['email'];
      $senha =     md5($_POST['senha']);

      if( !empty( $nome ) ) {
        $sql = $pdo->prepare("UPDATE funcionario SET nome=:nome WHERE id=:id");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $email ) ) {
        $sql = $pdo->prepare("UPDATE funcionario SET email=:email WHERE id=:id");
        $sql->bindValue(':email', $email);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $_POST['senha'] ) ) {
        $sql = $pdo->prepare("UPDATE funcionario SET senha=:senha WHERE id=:id");
        $sql->bindValue(':senha', $senha);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      $message = 'Usuário atualizado com sucesso!';
      header("Location: ../../employe.php?message={$message}");
    }

    // Resgata o usuário que está logado
    public function getLoggedUser() {
      $db = new Database;
      $pdo = $db->connect();

      $email = $_SESSION['email'];
      $senha = $_SESSION['senha'];

      $sql = $pdo->prepare("SELECT * FROM funcionario WHERE email=:email and senha=:senha");
      $sql->bindValue(':email', $email);
      $sql->bindValue(':senha', $senha);
      $sql->execute();

      $currentUser = $sql->fetchAll(PDO::FETCH_ASSOC);
      return $currentUser;
    }

    // Mostra o nome do usuário logado
    public function loggedUserName() {
      $user = $this->getLoggedUser();
      echo $user[0]['nome'];
    }

  }

  $employe = new Employe;

?>