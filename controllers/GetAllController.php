<?php
  get_file('models/models');

  class GetAllController {

    public $CRUDModel;

    public function __construct(){
      $this->CRUDModel = new CRUD();
    }

    function getAll( $table ) {
      return $this->CRUDModel->readAll( $table );
    }

  }
?>