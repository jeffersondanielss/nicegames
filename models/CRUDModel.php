<?php

  /**
  * CRUDModel.php
  * @author Jefferson Daniel <jeffersondanielss@gmail.com>
  */

  /**
  * Classe CRUD
  *
  * Classe com métodos comuns entre as classes e o banco de dados.
  */

  class CRUD {

    /**
    * Deleta itens de uma tabela de acordo com os parametros passados.
    *
    * @param int $id contém o id do registro.
    * @param String $table contém o nome da tabela.
    * @param String $redirectPage contém o caminho da página que o usuário vai ser redirecionado após a função ser chamada.
    * @return void
    */

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

    /**
    * Compara email e senha da $_SESSION com os registros cadastrados na tabela desejada.
    * 
    * @param String $table nome da tabela onde o email e senha vão ser buscados.
    * @return int Retorna um inteiro com a quantidade de linhas encontradas na tebela com esse email e senha.
    */

    public function userType( $table ) {

      if( !empty($_SESSION['email']) || !empty($_SESSION['senha']) ) {
        $db = new Database;
        $pdo = $db->connect();
        $user = $pdo->prepare("SELECT * FROM $table WHERE email=:email and senha=:senha");

        $user->bindValue(':email', $_SESSION['email']);
        $user->bindValue(':senha', $_SESSION['senha']);
        $user->execute();

        $rowUser = $user->rowCount();

        return $rowUser;
      }
    }

    /**
    * Conta registros em uma tabela.
    * 
    * @param String $table nome da tabela.
    * @return void
    */

    public function count( $table ) {
      $db = new Database;
      $pdo = $db->connect();
      $busca = $pdo->prepare("SELECT count(*) as total FROM $table");
      $busca->execute();
      $result = $busca->fetchColumn();
      echo $result;
    }

    /**
    * Busca todos registros de uma tabela.
    * 
    * @param String $table nome da tabela.
    * @return array Retorna um array com todos registros.
    */

    public function readAll( $table ) {
      $db = new Database;
      $pdo = $db->connect();
      $busca = $pdo->prepare("SELECT * FROM $table");
      $busca->execute();

      $linha = $busca->fetchAll(PDO::FETCH_ASSOC);

      return $linha;
    }

    /**
    * Busca todos registros de uma tabela.
    * 
    * @param int $id ID do registro.
    * @param String $table nome da tabela.
    * @return array Retorna um array com o registro procurado.
    */

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