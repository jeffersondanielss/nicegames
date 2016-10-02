<?php
  include_once 'models/models.php';

  class GetProductController {

    public $CRUDModel;

    public function __construct(){
      $this->CRUDModel = new CRUD();
    }

    function getProduct( $id ) {
      return $this->CRUDModel->getById($id, 'produto');
    }

  }
?>