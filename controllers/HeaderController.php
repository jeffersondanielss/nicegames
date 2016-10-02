<?php
  include_once 'models/models.php';

  class HeaderController {

    public $BuyModel;
    public $ClientModel;

    public function __construct(){
      $this->BuyModel = new Buy();
      $this->ClientModel = new Client();
    }

    function getTotal() {
      $total = $this->BuyModel->buyTotal();
    }

    function getItens() {
      $totalItens = $this->BuyModel->buyTotaltens();
      echo $totalItens;
    }

    function getUserName() {
      $username = $this->ClientModel->loggedUserName();
      return $username;
    }

  }
?>