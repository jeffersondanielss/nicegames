<?php
  include_once 'models/models.php';

  class GetProductsController {

    public $CRUDModel;

    public function __construct(){
      $this->CRUDModel = new CRUD();
    }

    function getProducts() {
      return $this->CRUDModel->readAll('produto');
    }

  }
?>