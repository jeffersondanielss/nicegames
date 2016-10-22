<?php
  inc('models/models');

  class GetByIdController {

    public $CRUDModel;

    public function __construct(){
      $this->CRUDModel = new CRUD();
    }

    function getById( $id, $table ) {
      return $this->CRUDModel->getById($id, $table);
    }

  }
?>