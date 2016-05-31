<?php

  /*
  * Author Jeferson Daniel
  * Version 1.0.0
  * CRUD PDO
  */

  class Database {

    // Conecta ao banco de dados
    public function connect() {
      $host = "localhost";
      $user = "root";
      $pass = "";
      $banco = "nicegames";

      try {
        $pdo = new PDO("mysql:host=$host;dbname=$banco", $user, $pass);
      } catch( PDOException $e ) {
        $e->getMessage();
      }

      return $pdo;
    }

    public function sessionStart() {
      session_start();

      if( empty($_SESSION['email']) || empty($_SESSION['senha']) ) {
        header("Location: ../.");
      }
    }

    public function isEmploye() {

      if( empty($_SESSION['email']) || empty($_SESSION['senha']) ) {
        $pdo = $this->connect();
        $funcionario = $pdo->prepare("SELECT * FROM funcionario WHERE email=:email and senha=:senha");

        $funcionario->bindValue(':email', $_SESSION['email']);
        $funcionario->bindValue(':senha', $_SESSION['senha']);
        $funcionario->execute();

        $rowFuncionario = $funcionario->rowCount();

        if( $rowFuncionario < 1 ) {
          header("Location: ../.");
        }

      }
    }

    // Login no sistema
    public function login() {
      $pdo = $this->connect();
      $email = $_POST['email'];
      $senha = md5($_POST['senha']);

      $cliente = $pdo->prepare("SELECT * FROM cliente WHERE email=:email and senha=:senha");
      $cliente->bindValue(':email', $email);
      $cliente->bindValue(':senha', $senha);
      $cliente->execute();

      $funcionario = $pdo->prepare("SELECT * FROM funcionario WHERE email=:email and senha=:senha");
      $funcionario->bindValue(':email', $email);
      $funcionario->bindValue(':senha', $senha);
      $funcionario->execute();

      $rowCliente = $cliente->rowCount();
      $rowFuncionario = $funcionario->rowCount();


      if( $rowCliente > 0 ) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        header("Location: ../../.");

      } else if( $rowFuncionario > 0 ) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        header("Location: ../.");
        
      } else {
        echo "<script>
        alert('Nome de usuarios ou senha invalidos, espera um momento para tentar novamente');
        window.location.href = '../../index.php';
        </script>";
      }
    }

  }

  $db = new Database;
  $db->sessionStart();
  $db->isEmploye();

?>