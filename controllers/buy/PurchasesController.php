<?php
  include_once 'models/models.php';

  class PurchasesController {

    public $BuyModel;
    public $ClientModel;

    public function __construct(){
      $this->BuyModel = new Buy();
      $this->ClientModel = new Client();
    }

    function getPurchases() {
      return $this->BuyModel->getBuyProducts();
    }

    function getTotal() {
      return $this->BuyModel->buyTotal();
    }

    function getLoggedUser() {
      return $this->ClientModel->getLoggedUser();
    }



  }
?>