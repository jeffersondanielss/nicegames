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
      include '../database.php';
      $db = new Database;
      $userId = $this->getUserId();

      $pdo = $db->connect();
      $sql = $pdo->prepare("INSERT INTO buy(id_cliente, id_produto)VALUES(:id_cliente, :id_produto)");
      $sql->bindValue(':id_cliente',  $userId);
      $sql->bindValue(':id_produto', $productId);
      $sql->execute();
    }

    public function removeCart( $id ) {}
    public function getCard( $id ) {}
    public function getBuyProducts() {
      if( !isset($_SESSION) ) {
        $db = new Database;
        $userId = $this->getUserId();
        $prod = [];

       var_dump($userId);
       die();

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
    }

    public function buyTotal() {
      if( !isset($_SESSION) ) {

        $db = new Database;
        $userId = $this->getUserId();

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

          foreach ($dadosProduto as $val) {
            $total += $val['preco'];
          }
        }

        echo $total;

      }
    }

    public function showCart() {
      $db = new Database;
      $userId = $this->getUserId();

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

        foreach ($dadosProduto as $val) {

          $line = '<tr class="cart_item">';
            $line .= '<td class="product-remove">';
              $line .= '<a title="Remove this item" class="remove" href="#">×</a> ';
            $line .= '</td>';

            $line .= '<td class="product-name">';
              $line .= $val['titulo'];
            $line .= '</td>';

            $line .= '<td class="product-price">';
              $line .= '<span class="amount">R$ ' . $val['preco'] .'</span> ';
            $line .= '</td>';
            $line .= '<td class="product-remove">&nbsp;</td>';
          $line .= '</tr>';

          echo $line;
        }
      }

    }
    public function purchase( $id ) {}

  }

  $buy = new Buy;

?>