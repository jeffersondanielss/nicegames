<?php

  /*
  * Author Jeferson Daniel
  * Version 1.0.0
  * CRUD PDO
  */

  class Product extends CRUD {

    // Cadastro no banco
    public function insert() {
      include '../database.php';
      $db = new Database;
      $pdo = $db->connect();

      $id =         $_POST['id'];
      $titulo =     $_POST['titulo'];
      $genero =     $_POST['genero'];
      $preco =      $_POST['preco'];
      $lancamento = $_POST['lancamento'];
      $audio =      $_POST['audio'];
      $legenda =    $_POST['legenda'];
      $tamanho =    $_POST['tamanho'];
      $quantidade = $_POST['quantidade'];
      $image =      $_FILES['image']['tmp_name'];

      if( isset($_FILES['image']) ) {
        $extensao = strtolower(substr($_FILES['image']['name'], -4));
        $newName = md5(time()). $extensao;
        $diretorio = '../../../upload/';

        move_uploaded_file($image, $diretorio.$newName);
      }

      $validar = $pdo->prepare("SELECT * FROM produto WHERE id=:id");
      $validar->bindValue(':id', $id);
      $validar->execute();

      if( $validar->rowCount() == 0 ):
        // die();
          $sql = $pdo->prepare("INSERT INTO produto(id, titulo, genero, preco, lancamento, audio, legenda, tamanho, quantidade, image)VALUES(:id, :titulo, :genero, :preco, :lancamento, :audio, :legenda, :tamanho, :quantidade, :image)");

          $sql->bindValue(':id',         $id);
          $sql->bindValue(':titulo',     $titulo);
          $sql->bindValue(':genero',     $genero);
          $sql->bindValue(':preco',      $preco);
          $sql->bindValue(':lancamento', $lancamento);
          $sql->bindValue(':audio',      $audio);
          $sql->bindValue(':legenda',    $legenda);
          $sql->bindValue(':tamanho',    $tamanho);
          $sql->bindValue(':quantidade', $quantidade);
          $sql->bindValue(':image',      $newName);

          $sql->execute();
          $message = 'Cadastro realizado com sucesso!';
          header("Location: ../../index.php?message={$message}");
      else:
          $message = 'Já existe um produto com este id!';
          header("Location: ../../index.php?message={$message}");
      endif;
    }

    // Atualizar usuário
    public function update() {
      include '../database.php';
      $db = new Database;
      $pdo = $db->connect();

      $id =         $_POST['id'];
      $titulo =     $_POST['titulo'];
      $genero =     $_POST['genero'];
      $preco =      $_POST['preco'];
      $lancamento = $_POST['lancamento'];
      $audio =      $_POST['audio'];
      $legenda =    $_POST['legenda'];
      $tamanho =    $_POST['tamanho'];
      $quantidade = $_POST['quantidade'];
      $image =      $_FILES['image']['tmp_name'];

      if( !empty( $titulo ) ) {
        $sql = $pdo->prepare("UPDATE produto SET titulo=:titulo WHERE id=:id");
        $sql->bindValue(':titulo', $titulo);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $genero ) ) {
        $sql = $pdo->prepare("UPDATE produto SET genero=:genero WHERE id=:id");
        $sql->bindValue(':genero', $genero);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $preco ) ) {
        $sql = $pdo->prepare("UPDATE produto SET preco=:preco WHERE id=:id");
        $sql->bindValue(':preco', $preco);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $lancamento ) ) {
        $sql = $pdo->prepare("UPDATE produto SET lancamento=:lancamento WHERE id=:id");
        $sql->bindValue(':lancamento', $lancamento);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $audio ) ) {
        $sql = $pdo->prepare("UPDATE produto SET audio=:audio WHERE id=:id");
        $sql->bindValue(':audio', $audio);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $legenda ) ) {
        $sql = $pdo->prepare("UPDATE produto SET legenda=:legenda WHERE id=:id");
        $sql->bindValue(':legenda', $legenda);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $tamanho ) ) {
        $sql = $pdo->prepare("UPDATE produto SET tamanho=:tamanho WHERE id=:id");
        $sql->bindValue(':tamanho', $tamanho);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $quantidade ) ) {
        $sql = $pdo->prepare("UPDATE produto SET quantidade=:quantidade WHERE id=:id");
        $sql->bindValue(':quantidade', $quantidade);
        $sql->bindValue(':id', $id);
        $sql->execute();
      }

      if( !empty( $image ) ){
          $extensao = strtolower(substr($_FILES['image']['name'], -4));
          $newName = md5(time()). $extensao;
          $diretorio = '../../../upload/';
          move_uploaded_file($image, $diretorio.$newName);

          $sql = $pdo->prepare("UPDATE produto SET image=:image WHERE id=:id");
          $sql->bindValue(':image', $newName);
          $sql->bindValue(':id', $id);
          $sql->execute();
      }

      $message = 'Usuário atualizado com sucesso!';
      header("Location: ../../index.php?message={$message}");
    }

  }

?>