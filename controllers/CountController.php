<?php
  inc('models/models');

  class CountController {

    public $CRUDModel;

    public function __construct(){
      $this->CRUDModel = new CRUD();
    }

    function allItens( $table ) {
      $this->CRUDModel->count( $table );
    }

  }
?>