<?php

  /*
  * Author Jeferson Daniel
  * Version 1.0.0
  * CRUD PDO
  */

  class Buy extends Client {

    public function getUserId() {
      if( !isset($_SESSION) ) {
        session_start();
      }
      $user = parent::getLoggedUser();
      $userId = $user[0]['id'];
      return $userId;
    }

    public function addCart( $productId ) {
      $db = new Database;
      $userId = $this->getUserId();

      $pdo = $db->connect();
      $sql = $pdo->prepare("INSERT INTO buy(id_cliente, id_produto)VALUES(:id_cliente, :id_produto)");
      $sql->bindValue(':id_cliente',  $userId);
      $sql->bindValue(':id_produto', $productId);
      $sql->execute();
    }

    public function getBuyProducts() {
      $db = new Database;
      $userId = $this->getUserId();
      $prod = [];

      $pdo = $db->connect();
      $sql = $pdo->prepare("SELECT * FROM buy WHERE id_cliente = :id_cliente");
      $sql->bindValue(':id_cliente', $userId);
      $sql->execute();
      $produtosComprados = $sql->fetchAll(PDO::FETCH_ASSOC);

      foreach ($produtosComprados as $value) {
        $produto = $pdo->prepare("SELECT * FROM produto WHERE id = :id");
        $produto->bindValue(':id', $value['id_produto']);
        $produto->execute();
        $dadosProduto = $produto->fetchAll(PDO::FETCH_ASSOC);
        array_push($prod, $dadosProduto);
      }

      return $prod;
    }

    public function buyTotaltens() {
      $dadosProduto = $this->getBuyProducts();
      return count($dadosProduto);
    }

    public function buyTotal() {
      $total = 0;
      $dadosProduto = $this->getBuyProducts();

      foreach ($dadosProduto as $value) {
        foreach ($value as $val) {
          $total += $val['preco'];
        }
      }

      echo 'R$ ' . $total . ',00';
    }

    public function purchase( $userId ) {
      $db = new Database;
      $pdo = $db->connect();
      $sql = $pdo->prepare("DELETE FROM buy WHERE id_cliente = :id_cliente");
      $sql->bindValue(':id_cliente', $userId);
      $sql->execute();
    }

  }

?>